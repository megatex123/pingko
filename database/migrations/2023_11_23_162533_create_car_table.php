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

        Schema::create('car', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->foreign('user_id')->references('id')->on('user');
            $table->integer('lkp_car_type_id');
            $table->foreign('lkp_car_type_id')->references('id')->on('lkp_car_type');
            $table->integer('lkp_car_brand_id');
            $table->foreign('lkp_car_brand_id')->references('id')->on('lkp_car_brand_id');
            $table->integer('lkp_car_name_id');
            $table->foreign('lkp_car_name_id')->references('id')->on('lkp_car_name');
            $table->string('license_plate_no');
            $table->integer('year');
            $table->string('version');
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
        Schema::dropIfExists('car');
    }
};
