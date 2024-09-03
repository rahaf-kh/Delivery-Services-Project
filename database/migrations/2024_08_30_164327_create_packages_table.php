<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('image');
            $table->integer('count_of_orders');
            $table->integer('package_price');
            $table->integer('order_price');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('packages');
    }
};
