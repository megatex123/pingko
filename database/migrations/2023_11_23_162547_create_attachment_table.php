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

        Schema::create('attachment', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('user_id');
            // $table->foreign('user_id')->references('id')->on('user');
            $table->integer('lkp_attachment_type_id');
            // $table->foreign('lkp_attachment_type_id')->references('id')->on('lkp_attchment_type_id');
            $table->string('filename');
            $table->string('display');
            $table->string('path');
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
        Schema::dropIfExists('attachment');
    }
};
