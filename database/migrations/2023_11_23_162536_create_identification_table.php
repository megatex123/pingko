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

        Schema::create('identification', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            // $table->foreign('user_id')->references('id')->on('user');
            $table->integer('lkp_identification_type_id');
            // $table->foreign('lkp_identification_type_id')->references('id')->on('lkp_identification_type');
            $table->string('description');
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
        Schema::dropIfExists('identification');
    }
};
