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
            $table->id();
            $table->string('product_name')->nullable();
            $table->string('product_model')->nullable();
            $table->string('product_price')->nullable();
            $table->string('product_category')->nullable();
            $table->longText('product_short_description')->nullable();
            $table->longText('product_long_description')->nullable();
            $table->boolean('featured_product')->default(0);
            $table->boolean('purchased_item')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
