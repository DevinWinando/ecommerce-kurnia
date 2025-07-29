<?php

namespace App\Console\Commands;

use App\Clients\Pos;
use Carbon\Carbon;
use DB;
use Illuminate\Console\Command;

class SyncCategories extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sync:categories';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Sync categories from POS';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $categories = Pos::http('POST', '/categories');

        if ($categories->failed()) {
            $this->error('Failed to sync categories from POS.');
            return;
        }

        $categories = json_decode($categories->body(), true);

        $data = collect($categories)->map(function ($item) {
            $item['created_at'] = Carbon::parse($item['created_at'])->format('Y-m-d H:i:s.u');
            $item['updated_at'] = Carbon::parse($item['updated_at'])->format('Y-m-d H:i:s.u');
            return $item;
        })->toArray();

        DB::table('categories')->truncate();
        DB::table('categories')->insert($data);
    }
}
