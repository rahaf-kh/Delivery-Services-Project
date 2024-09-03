<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('work__times', function (Blueprint $table) {
            $table->id();
            $table->enum('date_name',['winter','summer']);
            $table->time('form');
            $table->time('to');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('work__times');
    }
};
