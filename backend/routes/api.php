<?php

use Illuminate\Support\Facades\Route;
use App\Controllers\ExamplesController;
use App\Controllers\ArticlesController;

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

Route::get('/articles', [ArticlesController::class, 'index']);
Route::post('/articles', [ArticlesController::class, 'create']);
Route::patch('/articles', [ArticlesController::class, 'update']);
Route::delete('/articles', [ArticlesController::class, 'destroy']);
