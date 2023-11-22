<?php

namespace App\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TasksController {
  function index() {
    return Task::all();
  }

  function store(Request $request) {
    $request->validate(Task::validationRules());
    $name = $request->input('name');
    $task = new Task();
    $task->name = $name;
    $task->save();
    return Task::all();
  }

  function destroy(Request $request) {
    $id = $request->input('id');
    $task = Task::find($id);
    if ($task) $task->delete();
    return Task::all();
  }

  function clear(Request $request) {
    Task::truncate();
    return Task::all();
  }
}
