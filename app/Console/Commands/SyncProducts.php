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
        $page = 1;

        do {
            $response = Pos::http('POST', '/products', [
                'page' => $page,
                'per_page' => 1000,
            ]);

            $products = $response->json('data') ?? [];

            dispatch(new BulkSyncProduct($products));

            $page++;
        } while (!empty($products));
    }
}
