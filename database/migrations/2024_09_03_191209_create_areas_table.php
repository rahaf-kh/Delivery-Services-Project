<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('areas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->unsignedBigInteger('city');
            $table->foreign('city_id')->on('cities')->references('id')->onDelete('cascade');
        });
    }
    public function down()
    {
        Schema::dropIfExists('areas');
    }
};
