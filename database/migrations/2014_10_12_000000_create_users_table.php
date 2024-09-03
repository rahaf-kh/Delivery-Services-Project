<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('mobile')->unique();
            $table->string('uuid')->unique();
            $table->string('profile_image');
            $table->double('subscription_fees');
            $table->unsignedBigInteger('package_id');
            $table->text('address');
            $table->text('notes');
            $table->boolean('active');
            $table->date('Expire');
            $table->unsignedBigInteger('area_id');
            $table->enum('type', ['user', 'deliver', 'monitor', 'admin']);
            $table->rememberToken();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
