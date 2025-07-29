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
        Schema::create('carts', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->unsignedBigInteger('id', true);
            $table->unsignedBigInteger('user_id')->index('user_id');
            $table->unsignedBigInteger('product_id')->index('product_id');
            $table->integer('quantity')->default(1);
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
        Schema::drop('carts');
    }
};
