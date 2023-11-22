<?php

namespace App\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Spatie\RouteDiscovery\Attributes\Route;

class TasksController {
  function list() {
    return Task::all();
  }

  #[Route(method: 'post')]
  function create(Request $request) {
    $request->validate(Task::validationRules());
    $name = $request->input('name');
    $task = new Task();
    $task->name = $name;
    $task->save();
    return Task::all();
  }

  #[Route(method: 'delete')]
  function remove(Request $request) {
    $id = $request->input('id');
    $task = Task::find($id);
    if ($task) $task->delete();
    return Task::all();
  }

  #[Route(method: 'delete')]
  function clear(Request $request) {
    Task::truncate();
    return Task::all();
  }
}
