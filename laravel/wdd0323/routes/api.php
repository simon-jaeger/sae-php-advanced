<?php

use App\Controllers\ArticlesController;
use App\Controllers\ExamplesController;
use Illuminate\Support\Facades\Route;

Route::get('/articles', [ArticlesController::class, 'index']);
Route::post('/articles', [ArticlesController::class, 'create']);
Route::patch('/articles', [ArticlesController::class, 'update']);
Route::delete('/articles', [ArticlesController::class, 'destroy']);

















// Route::get('/examples/ping', [ExamplesController::class, 'ping']);
// Route::get('/examples/about', [ExamplesController::class, 'about']);
// Route::post('/examples/echo', [ExamplesController::class, 'echo']);
// Route::post('/examples/reverse', [ExamplesController::class, 'reverse']);
// Route::post('/examples/sum', [ExamplesController::class, 'sum']);
// Route::post('/examples/count', [ExamplesController::class, 'count']);
// Route::post('/examples/temperature', [ExamplesController::class, 'temperature']);
// Route::post('/examples/bmi', [ExamplesController::class, 'bmi']);
