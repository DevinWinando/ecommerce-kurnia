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
        Schema::create('transactions', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->unsignedBigInteger('user_id')->index('user_id');
            $table->dateTime('transaction_date');
            $table->float('total_amount', 10, 2);
            $table->string('status')->default('pending');
            $table->text('notes')->nullable();
            $table->string('payment_method')->nullable();
            $table->string('transaction_number')->unique();
            $table->string('shipping_address')->nullable();
            $table->string('tracking_number')->nullable();
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
        Schema::drop('transactions');
    }
};
