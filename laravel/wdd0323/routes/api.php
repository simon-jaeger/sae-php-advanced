<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/ping', function () {
  return 'pong';
});

Route::get('/todos', function () {
  return Storage::get('todos.json');
});

Route::post('/todos', function (Request $request) {
  $todos = Storage::json('todos.json');
  array_push($todos, $request->input('todo'));
  Storage::put('todos.json', json_encode($todos));
});

Route::delete('/todos', function (Request $request) {
  Storage::put('todos.json', '[]');
});
