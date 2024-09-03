<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('uuid')->unique();
            $table->text('order');
            $table->enum('status', ['completed', 'inProgress', 'waiting']);
            $table->unsignedBigInteger('delivery_id');
            $table->foreign('delivery_id')->on('deliveries')->references('id')->onDelete('cascade');
            $table->timestamp('scheduled_time');
            $table->timestamp('estimated_time');
            $table->text('address');
            $table->timestamp('start_delivery_time');
            $table->timestamp('received_time');
            $table->boolean('canceled');
            $table->boolean('is_voice');
            $table->string('voice_URL');
            $table->text('images');
            $table->string('cancled_note');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->on('users')->onDelete('cascade');
            $table->tinyInteger('rate');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
