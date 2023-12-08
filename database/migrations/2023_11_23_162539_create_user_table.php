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

        Schema::create('user', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('lkp_user_type_id');
            $table->foreign('lkp_user_type_id')->references('id')->on('lkp_user_type');
            $table->integer('account_id');
            $table->foreign('account_id')->references('id')->on('account');
            $table->text('name');
            $table->string('email');
            $table->integer('age');
            $table->dateTime('email_verified_at');
            $table->string('password');
            $table->string('photo_path');
            $table->rememberToken();
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
        Schema::dropIfExists('user');
    }
};
