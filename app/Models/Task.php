<?php

namespace App\Models;

use Schema;
use Illuminate\Database\Schema\Blueprint;

class Task extends Model {
  static function setup() {
    if (Schema::hasTable('tasks')) Schema::drop('tasks');
    Schema::create('tasks', function (Blueprint $table) {
      $table->id();
      $table->string('name');
    });
  }
}
