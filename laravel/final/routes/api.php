<?php

use App\Controllers\ArticlesController;
use App\Controllers\AuthController;
use App\Controllers\CommentsController;
use App\Controllers\ExamplesController;
use App\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/examples/ping', [ExamplesController::class, 'ping']);
Route::get('/examples/about', [ExamplesController::class, 'about']);
Route::post('/examples/echo', [ExamplesController::class, 'echo']);
Route::post('/examples/reverse', [ExamplesController::class, 'reverse']);
Route::post('/examples/sum', [ExamplesController::class, 'sum']);
Route::post('/examples/count', [ExamplesController::class, 'count']);
Route::post('/examples/temperature', [ExamplesController::class, 'temperature']);
Route::post('/examples/bmi', [ExamplesController::class, 'bmi']);

Route::post('/user', [UserController::class, 'create']);
Route::post('/auth/login', [AuthController::class, 'login']);
Route::get('/articles', [ArticlesController::class, 'index']);
Route::get('/comments', [CommentsController::class, 'index']);

Route::middleware(['auth:sanctum'])->group(function () {
  Route::get('/user', [UserController::class, 'show']);
  Route::patch('/user', [UserController::class, 'update']);
  Route::delete('/user', [UserController::class, 'destroy']);
  Route::post('/user/avatar', [UserController::class, 'avatar']);

  Route::post('/auth/logout', [AuthController::class, 'logout']);

  Route::post('/articles', [ArticlesController::class, 'create']);
  Route::patch('/articles', [ArticlesController::class, 'update']);
  Route::delete('/articles', [ArticlesController::class, 'destroy']);

  Route::post('/comments', [CommentsController::class, 'create']);
  Route::patch('/comments', [CommentsController::class, 'update']);
  Route::delete('/comments', [CommentsController::class, 'destroy']);
});

// Route::get('/ping', function () {
//   return 'pong';
// });
//
// Route::get('/todos', function () {
//   return Storage::get('todos.json');
// });
//
// Route::post('/todos', function (Request $request) {
//   $todos = Storage::json('todos.json');
//   array_push($todos, $request->input('todo'));
//   Storage::put('todos.json', json_encode($todos));
// });
//
// Route::delete('/todos', function (Request $request) {
//   Storage::put('todos.json', '[]');
// });
