<?php

use App\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Controllers\ExamplesController;
use App\Controllers\ArticlesController;
use App\Controllers\UserController;

// guest endpoints
Route::post('/auth/login', [AuthController::class, 'login']);
Route::post('/user', [UserController::class, 'create']);
Route::get('/articles', [ArticlesController::class, 'index']);

// user endpoints
Route::middleware(['auth:sanctum'])->group(function () {
  Route::post('/auth/logout', [AuthController::class, 'logout']);

  Route::get('/user', [UserController::class, 'index']);
  Route::patch('/user', [UserController::class, 'update']);
  Route::delete('/user', [UserController::class, 'destroy']);

  Route::post('/articles', [ArticlesController::class, 'create']);
  Route::patch('/articles', [ArticlesController::class, 'update']);
  Route::delete('/articles', [ArticlesController::class, 'destroy']);
});

























// example endpoints
Route::get('', function () {
  return 'hello laravel';
});
Route::get('/examples/hello', [ExamplesController::class, 'hello']);
Route::get('/examples/random', [ExamplesController::class, 'random']);
Route::get('/examples/about', [ExamplesController::class, 'about']);
Route::post('/examples/echo', [ExamplesController::class, 'echo']);
Route::post('/examples/reverse', [ExamplesController::class, 'reverse']);
Route::post('/examples/sum', [ExamplesController::class, 'sum']);
Route::post('/examples/count', [ExamplesController::class, 'count']);
Route::post('/examples/temperature', [ExamplesController::class, 'temperature']);
Route::post('/examples/rps', [ExamplesController::class, 'rps']);
