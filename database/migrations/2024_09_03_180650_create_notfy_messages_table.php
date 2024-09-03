<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('notfy_messages', function (Blueprint $table) {
            $table->id();
            $table->text('message');
            $table->unsignedBigInteger('order_id');
            $table->foreign('order_id')->on('orders')->references('id');
            $table->unsignedBigInteger('from');
            $table->foreign('from')->on('users')->references('id');
            $table->unsignedBigInteger('to');
            $table->foreign('to')->on('users')->references('id');
            $table->string('image_url');
            $table->boolean('is_voice');
            $table->string('voice_url');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('notfy_messages');
    }
};
