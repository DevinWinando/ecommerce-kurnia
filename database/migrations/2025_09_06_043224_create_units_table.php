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
        Schema::create('units', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('short_name');
            $table->timestamps();
        });

        Schema::table('products', function (Blueprint $table) {
            $table->unsignedBigInteger('unit_id');
        });

        Schema::table('transaction_items', function (Blueprint $table) {
            $table->unsignedBigInteger('unit_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('units');

        Schema::table('products', function (Blueprint $table) {
            $table->removeColumn('unit_id');
        });

        Schema::table('transaction_items', function (Blueprint $table) {
            $table->removeColumn('unit_id');
        });
    }
};
