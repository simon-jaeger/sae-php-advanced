<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return 'laravel';
});

Route::get('/demo/ping', [DemoController::class, 'ping']);
Route::post('/demo/echo', [DemoController::class, 'echo']);
Route::post('/demo/reverse', [DemoController::class, 'reverse']);
Route::post('/demo/sum', [DemoController::class, 'sum']);

Route::put('/tasks', [TasksController::class, 'reset']);
Route::get('/tasks', [TasksController::class, 'index']);
Route::post('/tasks', [TasksController::class, 'create']);
Route::delete('/tasks', [TasksController::class, 'destroy']);
