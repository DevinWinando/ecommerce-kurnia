<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display the cart items for the authenticated user.
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        $user = $request->user();
        $cartItems = Cart::where('user_id', $user->id)->with('product')->get();

        return response()->json($cartItems->map(function ($item) {
            return [
                'id' => $item->id,
                'product_id' => $item->product_id,
                'qty' => $item->qty,
                'product' => [
                    'id' => $item->product->id,
                    'name' => $item->product->name,
                    'price' => $item->product->price,
                    'image' => $item->product->image,
                ],
            ];
        }));
    }

    /**
     * Sync the cart with the server.
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function sync(Request $request)
    {
        // Validate the request data
        $request->validate([
            'items' => 'required|array',
            'items.*.id' => 'required|integer|exists:products,id',
            'items.*.qty' => 'required|integer|min:0',
        ]);

        $cartItems = $request->input('items');

        foreach ($cartItems as $item) {
            Cart::updateOrCreate(
                ['product_id' => $item['product_id'], 'user_id' => auth()->user()->id],
                ['qty' => $item['qty']]
            );
        }

        $user = $request->user();
        Cart::where('user_id', $user->id)
            ->whereNotIn('product_id', collect($cartItems)->pluck('product_id'))
            ->delete();

        return response()->json(['message' => 'Cart synced successfully']);
    }

    /**
     * Checkout the cart for the authenticated user.
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function checkout(Request $request)
    {
        $user = $request->user();
        $cartItems = Cart::where('user_id', $user->id)->with('product')->get();
        if ($cartItems->isEmpty()) {
            return response()->json(['message' => 'Cart is empty'], 400);
        }

        // Create a new transaction
        $transaction = $user->transactions()->create([
            'transaction_date' => now(),
            'total_amount' => $cartItems->sum(function ($item) {
                return $item->qty * $item->product->price;
            }),
            'status' => 'pending',
            'notes' => $request->input('notes', ''),
            'payment_method' => $request->input('payment_method', 'cash'),
            'transaction_number' => 'TRX-' . strtoupper(uniqid()),
            'shipping_address' => $request->input('shipping_address', ''),
            'tracking_number' => $request->input('tracking_number', ''),
        ]);

        // Create transaction items
        foreach ($cartItems as $item) {
            $transaction->items()->create([
                'product_id' => $item->product_id,
                'qty' => $item->qty,
                'price' => $item->product->price,
                'total' => $item->qty * $item->product->price,
            ]);
        }

        // Clear the cart after checkout
        Cart::where('user_id', $user->id)->delete();

        return response()->json(['message' => 'Checkout successful', 'items' => $cartItems]);
    }
}
