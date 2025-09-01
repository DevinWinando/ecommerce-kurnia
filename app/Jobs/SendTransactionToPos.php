<?php

namespace App\Jobs;

use App\Clients\Pos;
use App\Models\Product;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;

class SendTransactionToPos implements ShouldQueue
{
    use Queueable;

    /**
     * The transaction to sync.
     *
     * @var array
     */
    protected $transaction;

    /**
     * Create a new job instance.
     */
    public function __construct($transaction)
    {
        $this->transaction = $transaction;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        // Send the transaction data to the POS system
        $response = Pos::http('POST', '/checkout', $this->transaction);
    }
}
