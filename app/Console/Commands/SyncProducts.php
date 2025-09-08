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
        $units = Pos::http('POST', '/units');

        $units = json_decode($units->body(), true);

        $data = collect($units)->map(function ($item) {
            $item['created_at'] = Carbon::parse($item['created_at'])->format('Y-m-d H:i:s.u');
            $item['updated_at'] = Carbon::parse($item['updated_at'])->format('Y-m-d H:i:s.u');
            $item['short_name'] = $item['ShortName'];

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
