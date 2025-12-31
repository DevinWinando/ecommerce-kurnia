<?php

namespace App\Console\Commands;

use App\Clients\Pos;
use App\Jobs\BulkSyncProduct;
use Carbon\Carbon;
use DB;
use Illuminate\Console\Command;

class SyncProducts extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sync:products';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Sync products from POS';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Starting product sync from POS...');

        // Step 1: Sync units first
        $this->info('Syncing units...');
        $units = Pos::http('POST', '/units');

        if ($units->failed()) {
            $this->error('Failed to sync units from POS.');
            return 1;
        }

        $units = json_decode($units->body(), true);

        $data = collect($units)->map(function ($item) {
            $item['created_at'] = Carbon::parse($item['created_at'])->format('Y-m-d H:i:s.u');
            $item['updated_at'] = Carbon::parse($item['updated_at'])->format('Y-m-d H:i:s.u');
            $item['short_name'] = $item['ShortName'] ?? null;

            unset(
                $item['ShortName'],
                $item['base_unit'],
                $item['deleted_at'],
                $item['operator'],
                $item['operator_value'],
            );

            return $item;
        })->toArray();

        DB::table('units')->truncate();
        DB::table('units')->insert($data);
        $this->info('Units synced successfully.');

        // Step 2: Sync products from warehouse 24 only (ecommerce default)
        $this->info('Syncing products from warehouse 24 (ecommerce default)...');

        $page = 1;
        $totalProducts = 0;

        do {
            $response = Pos::http('POST', '/products', [
                'page' => $page,
                'per_page' => 1000,
                'warehouse_id' => 24, // Always use warehouse 24 for ecommerce
            ]);

            if ($response->failed()) {
                $this->error('Failed to fetch products from POS: ' . $response->body());
                break;
            }

            $responseData = $response->json();
            $products = $responseData['data'] ?? [];

            if (!empty($products)) {
                dispatch(new BulkSyncProduct($products));
                $totalProducts += count($products);
                $this->info("Page {$page}: Synced " . count($products) . " products (Total: {$totalProducts})");
            }

            $page++;
        } while (!empty($products) && $page <= ($responseData['last_page'] ?? 999));

        $this->info("Product sync completed! Total products synced: {$totalProducts}");
        return 0;
    }
}
