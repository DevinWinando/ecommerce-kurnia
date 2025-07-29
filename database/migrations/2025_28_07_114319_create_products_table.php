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
        Schema::create('products', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('id', true);
            $table->string('code', 192);
            $table->string('name', 192);
            $table->float('price', 10, 0);
            $table->float('qty', 10, 0);

            $table->integer('category_id')->index('category_id')->nullable();
            $table->text('image')->nullable();
            $table->boolean('is_active')->nullable()->default(1);
            $table->timestamps(6);
            $table->softDeletes();
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('products');
    }
};
