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

Route::post('/user', [UserController::class, 'create']);
Route::post('/auth/login', [AuthController::class, 'login']);
Route::get('/articles', [ArticlesController::class, 'index']);

Route::middleware(['auth:sanctum'])->group(function () {
  Route::get('/user', [UserController::class, 'show']);
  Route::patch('/user', [UserController::class, 'update']);
  Route::delete('/user', [UserController::class, 'destroy']);
  Route::post('/user/avatar', [UserController::class, 'avatar']);

  Route::post('/auth/logout', [AuthController::class, 'logout']);

  Route::post('/articles', [ArticlesController::class, 'create']);
  Route::delete('/articles', [ArticlesController::class, 'destroy']);
});
