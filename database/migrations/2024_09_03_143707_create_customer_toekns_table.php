<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('customer_toekns', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->on('users')->references('id')->onDelete('cascade');
            $table->string('mobile')->unique();
            $table->string('uuid')->unique();
            $table->string('token');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('customer_toekns');
    }
};
