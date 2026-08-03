<?php

use App\Controllers\ArticlesController;
use App\Controllers\AuthController;
use App\Controllers\CommentsController;
use App\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Controllers\ExamplesController;

Route::post('/user', [UserController::class, "create"]);
Route::post('/auth/login', [AuthController::class, "login"]);
Route::get('/articles', [ArticlesController::class, "index"]);
Route::get('/comments', [CommentsController::class, 'index']);

Route::middleware(['auth:sanctum'])->group(function () {
  Route::get('/user', [UserController::class, "index"]);
  Route::post('/auth/logout', [AuthController::class, "logout"]);
  Route::post('/articles', [ArticlesController::class, "create"]);
  Route::patch('/articles', [ArticlesController::class, "update"]);
  Route::delete('/articles', [ArticlesController::class, "destroy"]);
  Route::post('/comments', [CommentsController::class, 'create']);
  Route::patch('/comments', [CommentsController::class, 'update']);
  Route::delete('/comments', [CommentsController::class, 'destroy']);
});

// example endpoints
Route::get('/examples/hello', [ExamplesController::class, "hello"]);
Route::get('/examples/about', [ExamplesController::class, "about"]);
Route::get('/examples/random', [ExamplesController::class, "random"]);
Route::post('/examples/echo', [ExamplesController::class, "echo"]);
Route::post('/examples/sum', [ExamplesController::class, "sum"]);
Route::post('/examples/reverse', [ExamplesController::class, 'reverse']);
Route::post('/examples/sum', [ExamplesController::class, 'sum']);
Route::post('/examples/count', [ExamplesController::class, 'count']);
Route::post('/examples/palindrom', [ExamplesController::class, 'palindrom']);
Route::post('/examples/anagram', [ExamplesController::class, 'anagram']);
Route::post('/examples/temperature', [ExamplesController::class, 'temperature']);
Route::post('/examples/caesar', [ExamplesController::class, 'caesar']);
Route::post('/examples/rps', [ExamplesController::class, 'rps']);
