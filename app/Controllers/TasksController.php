<?php

namespace App\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

// very basic crud example
class TasksController {
  function index() {
    return Task::all();
  }

  function create(Request $request) {
    $name = $request->input('name');
    $task = new Task();
    $task->name = $name;
    $task->save();
    return Task::all();
  }

  function update(Request $request) {
    $id = $request->input('id');
    $name = $request->input('name');
    $task = Task::find($id);
    $task->name = $name;
    $task->save();
    return $task;
  }

  function destroy(Request $request) {
    $id = $request->input('id');
    $task = Task::find($id);
    if ($task) $task->delete();
    return Task::all();
  }

  function truncate(Request $request) {
    Task::truncate();
    return Task::all();
  }
}
