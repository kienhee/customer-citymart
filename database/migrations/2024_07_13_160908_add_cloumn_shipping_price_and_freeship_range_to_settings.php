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
        Schema::table('settings', function (Blueprint $table) {
            $table->integer('shipping_price')->comment('Giá ship mặc định')->default(59);
            $table->integer('freeship_range')->comment('khoảng giá bao nhiêu sẽ được free ship')->default(1000);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('settings', function (Blueprint $table) {
            $table->dropColumn('shipping_price');
            $table->dropColumn('freeship_range');
        });
    }
};
