<?php

namespace App\Jobs;

use App\Models\Product;
use App\Models\Warehouse;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\DB;

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
        foreach ($this->products as $productData) {
            // Extract warehouse data if exists
            $warehouses = $productData['warehouses'] ?? [];
            unset($productData['warehouses']);

            // Prepare product data
            $productFields = [
                'pos_id' => $productData['id'],
                'code' => $productData['code'] ?? null,
                'name' => $productData['name'] ?? null,
                'price' => $productData['price'] ?? 0,
                'category_id' => $productData['subcategory_id'] ?? $productData['category_id'] ?? null,
                'image' => $productData['image'] ?? null,
                'is_active' => $productData['is_active'] ?? true,
                'unit_id' => $productData['unit_id'] ?? null,
            ];

            // Update or create product
            $product = Product::updateOrCreate(
                ['pos_id' => $productData['id']],
                $productFields
            );

            // Sync warehouse relationship - always use warehouse 24 for ecommerce
            $defaultWarehouse = Warehouse::where('pos_id', 24)->first();

            if ($defaultWarehouse) {
                // Get qty from warehouse data if available, otherwise use product qty
                $qty = 0;

                if (!empty($warehouses)) {
                    // Find warehouse 24 in the warehouses array
                    $warehouse24Data = collect($warehouses)->firstWhere('warehouse_id', 24);
                    $qty = $warehouse24Data['qty'] ?? 0;
                } else {
                    // Fallback to product qty
                    $qty = $productData['qty'] ?? 0;
                }

                // Sync product-warehouse relationship with qty
                DB::table('product_warehouse')->updateOrInsert(
                    [
                        'product_id' => $product->id,
                        'warehouse_id' => $defaultWarehouse->id,
                    ],
                    [
                        'qty' => $qty,
                        'updated_at' => now(),
                        'created_at' => DB::raw('COALESCE(created_at, NOW())'),
                    ]
                );
            }
        }
    }
}
