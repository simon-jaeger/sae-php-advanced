<?php

namespace App\Controllers;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return 'laravel';
});

Route::get('/examples/ping', [ExamplesController::class, 'ping']);
Route::get('/examples/about', [ExamplesController::class, 'about']);
Route::post('/examples/echo', [ExamplesController::class, 'echo']);
Route::post('/examples/reverse', [ExamplesController::class, 'reverse']);
Route::post('/examples/sum', [ExamplesController::class, 'sum']);

Route::get('/tasks', [TasksController::class, 'index']);
Route::post('/tasks', [TasksController::class, 'create']);
Route::patch('/tasks', [TasksController::class, 'update']);
Route::delete('/tasks', [TasksController::class, 'destroy']);
Route::delete('/tasks/truncate', [TasksController::class, 'truncate']);

Route::post('/auth/login', [AuthController::class, 'login']);
Route::post('/auth/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');

Route::get('/user', [UserController::class, 'show'])->middleware('auth:sanctum');
