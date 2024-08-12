<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  function up() {
    Schema::create('users', function (Blueprint $table) {
      $table->id();
      $table->string('email');
      $table->string('password');
      $table->timestamps();
    });
  }

  function down() {
    Schema::dropIfExists('users');
  }
};