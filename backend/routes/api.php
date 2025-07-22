<?php

use Illuminate\Support\Facades\Route;
use App\Controllers\ExamplesController;
use App\Controllers\ArticlesController;
use App\Controllers\AuthController;
use App\Controllers\UserController;
use App\Controllers\CommentsController;

// example endpoints
Route::get('/hello', function () {
  return 'hello laravel';
});
Route::get('/examples/ping', [ExamplesController::class, 'ping']);
Route::get('/examples/about', [ExamplesController::class, 'about']);
Route::get('/examples/random', [ExamplesController::class, 'random']);
Route::post('/examples/echo', [ExamplesController::class, 'echo']);
Route::post('/examples/reverse', [ExamplesController::class, 'reverse']);
Route::post('/examples/sum', [ExamplesController::class, 'sum']);
Route::post('/examples/count', [ExamplesController::class, 'count']);
Route::post('/examples/palindrom', [ExamplesController::class, 'palindrom']);
Route::post('/examples/anagram', [ExamplesController::class, 'anagram']);
Route::post('/examples/temperature', [ExamplesController::class, 'temperature']);
Route::post('/examples/caesar', [ExamplesController::class, 'caesar']);
Route::post('/examples/rps', [ExamplesController::class, 'rps']);

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

  Route::get('/comments', [CommentsController::class, 'index']);
  Route::post('/comments', [CommentsController::class, 'create']);
  Route::patch('/comments', [CommentsController::class, 'update']);
  Route::delete('/comments', [CommentsController::class, 'destroy']);
});
