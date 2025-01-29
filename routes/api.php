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
