<?php

namespace App\Jobs;

use App\Models\Product;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;

class BulkSyncProduct implements ShouldQueue
{
    use Queueable;

    /**
     * The products to sync.
     *
     * @var array
     */
    protected $products;

    /**
     * Create a new job instance.
     */
    public function __construct($products)
    {
        $this->products = $products;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        foreach ($this->products as $product) {
            Product::updateOrCreate(['id' => $product['id']], [
                ...$product,
                'category_id' => $product['subcategory_id'],
            ]);
        }
    }
}
