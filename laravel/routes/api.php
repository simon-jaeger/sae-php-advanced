<?php

use Illuminate\Support\Facades\Route;
use App\Controllers\ExamplesController;

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
