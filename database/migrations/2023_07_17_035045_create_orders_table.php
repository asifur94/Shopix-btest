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
            $table->id('orders_id');
            $table->string('product_name')->nullable();
            $table->string('consignment_id')->nullable();
            $table->string('customer_name')->nullable();
            $table->string('phone')->nullable();
            $table->string('customer_area')->nullable();
            $table->string('customer_zone')->nullable();
            $table->string('customer_particular_zone')->nullable();
            $table->integer('customer_area_no')->nullable();
            $table->integer('customer_zone_no')->nullable();
            $table->integer('customer_particular_zone_no')->nullable();
            $table->string('delivery_type')->nullable();
            $table->string('item_type')->nullable();
            $table->string('item_weight')->nullable();
            $table->string('customer_full_address')->nullable();
            $table->integer('product_price')->nullable();
            $table->integer('quantity')->default(1);
            $table->integer('discount')->default(0);
            $table->integer('total_bill')->default(0);
            $table->integer('Advance')->default(0);
            $table->integer('cash_collection')->default(0);
            $table->string('extra_note')->nullable();
            $table->string('payment_status')->nullable();
            $table->string('order_status')->nullable();
            $table->string('order_status2')->nullable();
            $table->string('is_fake')->default(0);
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
