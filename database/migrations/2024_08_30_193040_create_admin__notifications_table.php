<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('admin__notifications', function (Blueprint $table) {
            $table->id();
            $table->text('title');
            $table->string('body');
            $table->unsignedBigInteger('order_id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->on('users')->references('id')->onDelete('cascade');
            $table->boolean('read');
            $table->timestamp('date');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('admin__notifications');
    }
};
