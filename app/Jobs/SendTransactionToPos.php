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
    protected $user;

    /**
     * Create a new job instance.
     */
    public function __construct($transaction, $user)
    {
        $this->transaction = $transaction;
        $this->user = $user;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        // Include user information in the request
        $response = Pos::http('POST', '/checkout', array_merge($this->transaction, ['user' => $this->user]));

        logger($response->body());
    }
}
