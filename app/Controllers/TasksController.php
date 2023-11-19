<?php

namespace App\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TasksController {
  function index() {
    return Task::all();
  }

  function create(Request $request) {
    $request->validate(Task::validationRules());
    $name = $request->input('name');
    $task = new Task();
    $task->name = $name;
    $task->save();
    return $task;
  }

  function destroy(Request $request) {
    $id = $request->input('id');
    $task = Task::findOrFail($id);
    $task->delete();
    return $task;
  }
}
