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
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('order_id',9);
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('address');
            $table->string('notes')->nullable();
            $table->integer('total');
            $table->integer('quantity');
            $table->integer('status')->default(0);
            $table->string('delivery_type');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
