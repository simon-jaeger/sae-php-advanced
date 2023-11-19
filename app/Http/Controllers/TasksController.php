<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Http\Request;

class TasksController {
  function reset() {
    Task::createTable();
    return [];
  }

  function index(Request $request) {
    return Task::all();
  }

  function create(Request $request) {
    $name = $request->input('name');
    $task = Task::create(['name' => $name]);
    return $task;
  }

  function destroy(Request $request) {
    $id = $request->input('id');
    $task = Task::findOrFail($id);
    $task->delete();
    return $task;
  }
}
