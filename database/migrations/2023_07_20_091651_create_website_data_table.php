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
        Schema::create('website_data', function (Blueprint $table) {
            $table->id('website_data_id');
            $table->string('website_title')->nullable();
            $table->string('topbar')->nullable();
            $table->string('sticy_topbar')->nullable();
            $table->string('herotitle')->nullable();
            $table->string('hero_bg_video')->nullable();
            $table->string('why_buy')->nullable();
            $table->string('why_buy_points')->nullable();
            $table->string('why_buy_img')->nullable();
            $table->string('timer_title')->nullable();
            $table->string('timer_date')->nullable();
            $table->string('prdouct_bottom_text')->nullable();
            $table->string('prdouct_bottom_img1')->nullable();
            $table->string('prdouct_bottom_img2')->nullable();
            $table->string('prdouct_bottom_img3')->nullable();
            $table->string('footer')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('website_data');
    }
};
