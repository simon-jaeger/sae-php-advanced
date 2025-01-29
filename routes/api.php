<?php

use Illuminate\Support\Facades\Route;
use App\Controllers\ExamplesController;

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
