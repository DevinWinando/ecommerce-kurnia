<?php

namespace App\Http\Controllers;

use App\Clients\Pos;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    /**
     * Get all transactions for authenticated user
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $transactions = $request->user()->transactions()->with('items.product')->get();

        return response()->json($transactions);
    }

    /**
     * Get transaction details with delivery tracking
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $transaction = $request->user()->transactions()
            ->with('items.product')
            ->findOrFail($id);

        // Get delivery tracking from POS system
        $deliveryTracking = null;
        try {
            $response = Pos::http('GET', "/deliveries/ecommerce/{$transaction->id}/tracking");
            if ($response->successful()) {
                $deliveryTracking = $response->json();
            }
        } catch (\Exception $e) {
            // No delivery yet or error connecting to POS
            \Log::warning('Failed to fetch delivery tracking: ' . $e->getMessage());
        }

        return response()->json([
            'transaction' => $transaction,
            'delivery_tracking' => $deliveryTracking,
        ]);
    }

    /**
     * Get delivery tracking for a transaction
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deliveryTracking(Request $request, $id)
    {
        // Verify user owns this transaction
        $transaction = $request->user()->transactions()->findOrFail($id);

        try {
            $response = Pos::http('GET', "/deliveries/ecommerce/{$transaction->id}/tracking");

            if ($response->successful()) {
                return response()->json($response->json());
            }

            return response()->json([
                'success' => false,
                'message' => 'No delivery tracking available for this transaction',
            ], 404);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to fetch delivery tracking',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Request delivery creation for transaction
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function requestDelivery(Request $request, $id)
    {
        // Verify user owns this transaction
        $transaction = $request->user()->transactions()->findOrFail($id);

        try {
            $response = Pos::http('POST', "/deliveries/from-ecommerce/{$transaction->id}", [
                'notes' => $request->input('notes', 'Delivery requested from ecommerce'),
                'estimated_distance' => $request->input('estimated_distance'),
            ]);

            if ($response->successful()) {
                return response()->json($response->json());
            }

            return response()->json([
                'success' => false,
                'message' => $response->json()['message'] ?? 'Failed to create delivery',
            ], $response->status());
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to request delivery',
                'error' => $e->getMessage(),
            ], 500);
        }
    }
}
