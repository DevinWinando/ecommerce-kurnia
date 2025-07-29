<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('phone')->nullable()->after('middle_name');
            $table->integer('point')->default(0)->after('phone');
            $table->string('pos_id')->nullable()->after('point');
        });

        // Add index for phone column
        Schema::table('users', function (Blueprint $table) {
            $table->index('phone');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropIndex(['phone']);
            $table->dropColumn(['phone', 'point']);
        });
    }
};
