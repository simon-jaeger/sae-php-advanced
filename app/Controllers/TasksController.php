<?php

namespace App\Controllers;

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Http\Request;

class TasksController {
  function reset() {
    if (\Schema::hasTable('tasks')) \Schema::drop('tasks');
    \Schema::create('tasks', function (Blueprint $table) {
      $table->id();
      $table->string('name');
    });
    return [];
  }

  function index(Request $request) {
    return \DB::table('tasks')->get();
  }

  function create(Request $request) {
    $name = $request->input('name');
    \DB::table('tasks')->insert(['name' => $name]);
    return \DB::table('tasks')->get();
  }

  function destroy(Request $request) {
    $id = $request->input('id');
    \DB::table('tasks')->delete($id);
    return \DB::table('tasks')->get();
  }
}
