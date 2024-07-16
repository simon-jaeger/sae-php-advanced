<?php

use App\Controllers\ArticlesController;
use App\Controllers\ExamplesController;
use Illuminate\Support\Facades\Route;

Route::get('/examples/ping', [ExamplesController::class, 'ping']);
Route::get('/examples/about', [ExamplesController::class, 'about']);
Route::post('/examples/echo', [ExamplesController::class, 'echo']);
Route::post('/examples/reverse', [ExamplesController::class, 'reverse']);

Route::post('/examples/sum', [ExamplesController::class, 'sum']);
Route::post('/examples/count', [ExamplesController::class, 'count']);
Route::post('/examples/temperature', [ExamplesController::class, 'temperature']);
Route::post('/examples/bmi', [ExamplesController::class, 'bmi']);

Route::get('/articles/read', [ArticlesController::class, 'read']);
Route::post('/articles/create', [ArticlesController::class, 'create']);

























// use Illuminate\Http\Request;

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
