<?php

namespace App\Http\Controllers;

use App\Clients\Pos;
use App\Models\Transaction;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Log;
use Midtrans\Snap;
use Midtrans\Config;
use Midtrans\Notification;

class PaymentController extends Controller
{
    public function __construct()
    {
        Config::$serverKey = config('midtrans.server_key');
        Config::$isProduction = config('midtrans.is_production');
        Config::$isSanitized = true;
        Config::$is3ds = true;
    }

    public function getSnapToken($id, Request $request)
    {
        $transaction = Transaction::with('items.product', 'user')->find($id);

        $params = [
            'transaction_details' => [
                'order_id' => uniqid(),
                'gross_amount' => $transaction->total_amount,
            ],
            'customer_details' => [
                'first_name' => $transaction->user->first_name,
                'email' => $transaction->user->email,
            ],
            'custom_field1' => $transaction->id,
        ];

        $snapToken = Snap::getSnapToken($params);

        return response()->json(['token' => $snapToken]);
    }

    public function callback(Request $request)
    {
        $notif = new Notification();

        $status = $notif->transaction_status;
        $type = $notif->payment_type;
        $orderId = $notif->order_id;
        $fraud = $notif->fraud_status;
        $transId = $notif->custom_field1;

        // Log biar gampang debug
        Log::info("Midtrans callback: ", (array) $notif);

        $transaction = Transaction::with('items.product', 'user')->find($transId);

        if ($status == 'capture') {
            if ($type == 'credit_card') {
                if ($fraud == 'challenge') {
                    $transaction->update(['status' => 'pending']);
                } else {
                    $this->paymentSuccess($transaction);
                }
            }
        } else if ($status == 'settlement') {
            $this->paymentSuccess($transaction);
        } else if ($status == 'pending') {
            $transaction->update(['status' => 'pending']);
        } else if ($status == 'deny') {
            $transaction->update(['status' => 'cancel']);
        } else if ($status == 'expire') {
            $transaction->update(['status' => 'cancel']);
        } else if ($status == 'cancel') {
            $transaction->update(['status' => 'cancel']);
        }

        return response()->json(['status' => 'ok']);
    }

    private function paymentSuccess($transaction)
    {
        $transaction->update(['status' => 'paid']);

        Pos::http('put', '/api/transactions/' . $transaction->id)->post('/api/transactions', [
            'transaction' => $transaction->toArray(),
            'user' => $transaction->user->toArray(),
        ]);
    }

    public function download($id)
    {
        $transaction = Transaction::with('items.product.unit', 'user')->find($id);

        $pdf = Pdf::loadView('invoice', compact('transaction'));

        return $pdf->download();
    }
}
