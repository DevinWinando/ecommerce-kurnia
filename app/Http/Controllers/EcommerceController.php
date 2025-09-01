<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class EcommerceController extends Controller
{
    public function updateTransaction($id, Request $request)
    {
        // Validate and update the transaction
        $request->validate([
            'status' => 'required|string|in:pending,completed,canceled',
            'shipping_cost' => 'required|numeric',
        ]);

        // Find the transaction by ID
        $transaction = Transaction::with('items.product')->findOrFail($id);

        $totalAmount = $transaction->items->sum(function ($item) {
            return $item->total;
        }) + $request->shipping_cost;

        $transaction->update([
            'status' => $request->status,
            'shipping_cost' => $request->shipping_cost,
            'total_amount' => $totalAmount,
        ]);

        return response()->json($transaction);
    }
}
