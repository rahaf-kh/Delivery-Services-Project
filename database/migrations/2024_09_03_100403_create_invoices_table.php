<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->text('content');
            $table->integer('quantity');
            $table->double('price');
            $table->double('total');
            $table->unsignedBigInteger('delivery_id');
            $table->foreign('delivery_id')->on('deliveries')->references('id')->onDelete('cascade');
            $table->unsignedBigInteger('order_id');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('invoices');
    }
};
