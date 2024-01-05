<?php

namespace App\Controllers;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return 'hello, laravel';
});

Route::get('/examples/ping', [ExamplesController::class, 'ping']);
Route::get('/examples/about', [ExamplesController::class, 'about']);
Route::post('/examples/echo', [ExamplesController::class, 'echo']);
Route::post('/examples/reverse', [ExamplesController::class, 'reverse']);
Route::post('/examples/sum', [ExamplesController::class, 'sum']);
Route::post('/examples/temperature', [ExamplesController::class, 'temperature']);

Route::get('/tasks', [TasksController::class, 'index']);
Route::post('/tasks', [TasksController::class, 'create']);
Route::patch('/tasks', [TasksController::class, 'update']);
Route::delete('/tasks', [TasksController::class, 'destroy']);
Route::delete('/tasks/truncate', [TasksController::class, 'truncate']);

Route::get('/user', [UserController::class, 'show'])->middleware('auth:sanctum');
Route::post('/user', [UserController::class, 'create']);
Route::patch('/user', [UserController::class, 'update'])->middleware('auth:sanctum');
Route::delete('/user', [UserController::class, 'destroy'])->middleware('auth:sanctum');

Route::post('/auth/login', [AuthController::class, 'login']);
Route::post('/auth/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');

Route::get('/tweets', [TweetsController::class, 'index']);
Route::post('/tweets', [TweetsController::class, 'create'])->middleware('auth:sanctum');
Route::delete('/tweets', [TweetsController::class, 'destroy'])->middleware('auth:sanctum');
