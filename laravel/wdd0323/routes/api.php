<?php

use Illuminate\Support\Facades\Route;

use App\Controllers\ExamplesController;

// Route::get('/ping', function () {
//   return 'pong';
// });

Route::get('/ping', [ExamplesController::class, 'ping']);
