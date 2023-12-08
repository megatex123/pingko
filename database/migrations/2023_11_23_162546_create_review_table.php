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

        Schema::create('review', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('lkp_rate_id');
            $table->foreign('lkp_rate_id')->references('id')->on('lkp_rate');
            $table->integer('user_id');
            $table->foreign('user_id')->references('id')->on('user');
            $table->integer('vendor_id');
            $table->foreign('vendor_id')->references('id')->on('vendor');
            $table->text('user_comment');
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
        Schema::dropIfExists('review');
    }
};
