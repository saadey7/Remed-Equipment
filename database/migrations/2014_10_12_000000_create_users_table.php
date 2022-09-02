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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username')->nullable();
            $table->string('email')->unique();
            $table->string('password')->nullable();
            $table->string('image')->nullable();
            $table->string('phone_no')->nullable();
            $table->string('type')->nullable();
            $table->string('vehicle_type')->nullable();
            $table->string('vehicle_no')->nullable();
            $table->boolean('driver_approve')->default(0);
            $table->timestamp('email_verified_at')->nullable();
            $table->longText('api_token')->nullable();
            $table->longText('fcm_token')->nullable();
            $table->boolean('status')->default(0)->nullable()->comment('o for Inactive and 1 for active');
            $table->double('latitude')->nullable();
            $table->double('longitude')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
