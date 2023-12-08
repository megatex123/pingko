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
        Schema::disableForeignKeyConstraints();

        Schema::create('booking', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('review_id')->nullable();
            $table->foreign('review_id')->references('id')->on('review');
            $table->integer('user_id');
            $table->foreign('user_id')->references('id')->on('user');
            $table->integer('vendor_id');
            $table->foreign('vendor_id')->references('id')->on('vendor');
            $table->integer('lkp_booking_status_id');
            $table->foreign('lkp_booking_status_id')->references('id')->on('lkp_booking_status_id');
            $table->dateTime('created_at');
            $table->dateTime('updated_at');
            $table->dateTime('deleted_at');
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('booking');
    }
};
