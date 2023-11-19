<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;

/**
 * @property string $name
 */
class Task extends Model {
  public $timestamps = false;

  static function createTable() {
    if (\Schema::hasTable('tasks')) \Schema::drop('tasks');
    \Schema::create('tasks', function (Blueprint $table) {
      $table->id();
      $table->string('name');
    });
  }
}
