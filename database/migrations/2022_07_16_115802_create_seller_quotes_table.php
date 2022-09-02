<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSellerQuotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seller_quotes', function (Blueprint $table) {
            $table->id();
            $table->string('product_name');
            $table->string('product_model');
            $table->string('product_price');
            $table->string('username');
            $table->string('email');
            $table->string('company')->nullable();
            $table->string('contact')->nullable();
            $table->string('country')->nullable();
            $table->text('address')->nullable();
            $table->text('enquiry')->nullable();
            $table->boolean('status')->default(0);
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
        Schema::dropIfExists('seller_quotes');
    }
}
