<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return 'laravel';
});

Route::get('/examples/ping', [ExamplesController::class, 'ping']);
Route::post('/examples/echo', [ExamplesController::class, 'echo']);
Route::post('/examples/reverse', [ExamplesController::class, 'reverse']);
Route::post('/examples/sum', [ExamplesController::class, 'sum']);

Route::put('/tasks', [TasksController::class, 'reset']);
Route::get('/tasks', [TasksController::class, 'index']);
Route::post('/tasks', [TasksController::class, 'create']);
Route::delete('/tasks', [TasksController::class, 'destroy']);
