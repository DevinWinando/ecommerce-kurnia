<?php

namespace App\Http\Controllers;

use App\Jobs\SendTransactionToPos;
use App\Models\Cart;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

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

    public static function generateTransactionNumber()
    {
        $date = now()->format('Ymd');

        $lastTransaction = Transaction::whereDate('created_at', now())
            ->orderBy('id', 'desc')
            ->first();

        $number = 1;

        if ($lastTransaction) {
            // Ambil nomor urut terakhir
            $lastNumber = (int) substr($lastTransaction->transaction_number, -4);
            $number = $lastNumber + 1;
        }

        // Format: TRX-YYYYMMDD-XXXX
        return 'TRX-' . $date . '-' . str_pad($number, 4, '0', STR_PAD_LEFT);
    }

    /**
     * Checkout the cart for the authenticated user.
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function checkout(Request $request)
    {
        try {
            $user = $request->user();
            $cartItems = Cart::where('user_id', $user->id)->with('product')->get();

            if ($cartItems->isEmpty()) {
                return response()->json(['message' => 'Cart is empty'], 400);
            }

            $transaction = null;

            DB::transaction(function () use ($user, $cartItems, $request, &$transaction) {
                // Create transaction
                $transaction = $user->transactions()->create([
                    'transaction_date' => now(),
                    'total_amount' => $cartItems->sum(fn($item) => $item->qty * $item->product->price),
                    'status' => 'pending',
                    'notes' => $request->input('notes', ''),
                    'payment_method' => $request->input('payment_method', 'cash'),
                    'transaction_number' => self::generateTransactionNumber(),
                    'shipping_address' => $request->input('shipping_address', ''),
                    'tracking_number' => $request->input('tracking_number', ''),
                    'warehouse_id' => 24,
                    'customer_name' => $user->first_name . ' ' . $user->last_name,
                    'customer_phone' => $user->phone,
                    'customer_email' => $user->email,
                ]);

                // Create items
                foreach ($cartItems as $item) {
                    $transaction->items()->create([
                        'product_id' => $item->product_id,
                        'qty' => $item->qty,
                        'price' => $item->product->price,
                        'total' => $item->qty * $item->product->price,
                        'unit_id' => $item->product->unit_id,
                        'warehouse_id' => 24,
                    ]);
                }

                // Clear cart
                Cart::where('user_id', $user->id)->delete();

                // Dispatch setelah commit sukses
                DB::afterCommit(function () use ($transaction, $user) {
                    dispatch(new SendTransactionToPos(
                        $transaction->load('items.product')->toArray(),
                        $user->toArray()
                    ));
                });
            });

            return response()->json([
                'message' => 'Checkout successful',
                'items' => $cartItems,
            ]);
        } catch (\Throwable $e) {
            Log::error('Checkout error: ' . $e->getMessage(), [
                'trace' => $e->getTraceAsString()
            ]);

            return response()->json([
                'message' => 'Checkout failed',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    private function getNumberOrder($request)
    {
        $last = DB::table('ecommerces')->latest('id')->first();
        if ($last) {
            $item = $last->Ref;
            $nwMsg = explode("_", $item);
            $inMsg = $nwMsg[0] + 1;
            $code = $inMsg . "_" . date("Y");
        } else {
            $code = "1_" . date("Y");
        }
        return $code;
    }
}
