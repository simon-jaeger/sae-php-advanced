<?php

use Illuminate\Support\Facades\Route;
use App\Controllers\ExamplesController;

Route::get('/hello', function () {
  return 'hello laravel';
});

Route::get('/examples/ping', [ExamplesController::class, 'ping']);
Route::get('/examples/about', [ExamplesController::class, 'about']);
Route::get('/examples/random', [ExamplesController::class, 'random']);
Route::post('/examples/echo', [ExamplesController::class, 'echo']);
