<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('user_general_notifies', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('desc');
            $table->unsignedBigInteger('order_id');
            $table->foreign('order_id')->on('orders')->references('id')->onDelete('cascade');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->on('users')->references('id')->onDelete('cascade');
            $table->boolean('read');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('user_general_notifies');
    }
};
