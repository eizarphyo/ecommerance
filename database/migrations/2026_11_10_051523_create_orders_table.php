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
            $table->id();
            $table->foreignId('customer_id')->constrained('customers');
            $table->foreignId('user_id')->constrained('users');
            $table->integer('total_amount')->default(0);
            $table->integer('discount')->default(0);
            $table->integer('delivery_fee')->default(0);
            $table->integer('subtotal')->default(0);
            $table->integer('remarks')->nullable();
            $table->enum('order_status', [
                'pending',
                'cancelled',
                'completed',
            ])->default('pending');
            $table->enum('payment_status', [
                'paid',
                'unpaid',
            ])->default('unpaid');
            $table->enum('delivery_status', [
                'pending',
                'shipped',
                'delivered',
            ])->default('pending');
            $table->timestamps();
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
