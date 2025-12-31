<?php

namespace App\Console\Commands;

use App\Clients\Pos;
use App\Models\Warehouse;
use Illuminate\Console\Command;

class SyncWarehouses extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sync:warehouses';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Sync warehouses from POS system including location data';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Syncing warehouses from POS...');

        try {
            $response = Pos::http('GET', '/warehouses');

            if ($response->failed()) {
                $this->error('Failed to fetch warehouses from POS: ' . $response->body());
                return 1;
            }

            $warehouses = $response->json();

            if (empty($warehouses)) {
                $this->warn('No warehouses found in POS system.');
                return 0;
            }

            $syncedCount = 0;
            $createdCount = 0;
            $updatedCount = 0;

            foreach ($warehouses as $warehouseData) {
                $warehouse = Warehouse::updateOrCreate(
                    ['pos_id' => $warehouseData['id']],
                    [
                        'name' => $warehouseData['name'],
                        'mobile' => $warehouseData['mobile'] ?? null,
                        'email' => $warehouseData['email'] ?? null,
                        'city' => $warehouseData['city'] ?? null,
                        'country' => $warehouseData['country'] ?? null,
                        'zip' => $warehouseData['zip'] ?? null,
                        'latitude' => $warehouseData['latitude'] ?? null,
                        'longitude' => $warehouseData['longitude'] ?? null,
                        'bistype' => $warehouseData['bistype'] ?? null,
                        'bisname' => $warehouseData['bisname'] ?? null,
                        'is_active' => true,
                    ]
                );

                if ($warehouse->wasRecentlyCreated) {
                    $createdCount++;
                } else {
                    $updatedCount++;
                }
                $syncedCount++;
            }

            $this->info("Sync completed successfully!");
            $this->info("Total synced: {$syncedCount}");
            $this->info("Created: {$createdCount}");
            $this->info("Updated: {$updatedCount}");

            return 0;
        } catch (\Exception $e) {
            $this->error('Error syncing warehouses: ' . $e->getMessage());
            return 1;
        }
    }
}
