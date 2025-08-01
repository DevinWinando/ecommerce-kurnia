<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaction_items', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->unsignedBigInteger('transaction_id')->index('transaction_id');
            $table->unsignedBigInteger('product_id')->index('product_id');
            $table->integer('qty')->default(1);
            $table->float('price', 10, 2);
            $table->float('total', 10, 2);
            $table->text('notes')->nullable();
            $table->timestamps(6);
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('transaction_items');
    }
};
