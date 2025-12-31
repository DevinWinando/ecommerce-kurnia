<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        if (!Schema::hasTable('product_warehouse')) {
            Schema::create('product_warehouse', function (Blueprint $table) {
                $table->id();
                $table->integer('product_id'); // Match products table id type
                $table->unsignedBigInteger('warehouse_id');
                $table->decimal('qty', 10, 2)->default(0);
                $table->timestamps();

                $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
                $table->foreign('warehouse_id')->references('id')->on('warehouses')->onDelete('cascade');
                $table->unique(['product_id', 'warehouse_id']);
                $table->index('warehouse_id');
            });
        } else {
            // Table exists, just add missing columns if needed
            Schema::table('product_warehouse', function (Blueprint $table) {
                if (!Schema::hasColumn('product_warehouse', 'qty')) {
                    $table->decimal('qty', 10, 2)->default(0)->after('warehouse_id');
                }
                if (!Schema::hasColumn('product_warehouse', 'warehouse_id')) {
                    $table->unsignedBigInteger('warehouse_id')->after('product_id');
                    $table->foreign('warehouse_id')->references('id')->on('warehouses')->onDelete('cascade');
                }
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_warehouse');
    }
};
