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
        Schema::create('single_products', function (Blueprint $table) {
            $table->id('single_products_id');
            $table->string('name')->default("Product Name");
            $table->string('color')->nullable();
            $table->string('type')->nullable();
            $table->string('sold_in_last_10_hours')->nullable();
            $table->text('short_desc')->nullable();
            $table->string('productcode')->nullable();
            $table->string('reviews')->nullable();
            $table->string('Viewing')->nullable();
            $table->string('Brand')->nullable();
            $table->string('leathertype')->nullable();
            $table->string('material')->nullable();
            $table->string('active_noise_cancellation')->nullable();
            $table->string('communication')->nullable();
            $table->string('control_the_volumes')->nullable();
            $table->string('sensitivity')->nullable();
            $table->string('impedance_range')->nullable();
            $table->string('modelnumber')->nullable();
            $table->string('headphone_pad_material')->nullable();
            $table->string('bluetooth_version')->nullable();
            $table->string('frequency_response_range')->nullable();
            $table->string('total_harmonic_distortion')->nullable();
            $table->string('charging_method')->nullable();
            $table->string('maximum_output')->nullable();
            $table->string('codecs')->nullable();
            $table->text('full_desc')->nullable();
            $table->string('resistance')->nullable();
            $table->string('features')->nullable();
            $table->string('point_1')->nullable();
            $table->string('point_2')->nullable();
            $table->string('exchangeable')->nullable();
            $table->string('refundable')->nullable();
            $table->string('manufacturername')->nullable();
            $table->string('manufacturerbrand')->nullable();
            $table->string('stocks')->nullable();
            $table->integer('price')->default(0);
            $table->integer('discount')->nullable();
            $table->string('visibility')->nullable();
            $table->string('tag')->nullable();
            $table->string('status')->nullable();
            $table->string('img')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('single_products');
    }
};
