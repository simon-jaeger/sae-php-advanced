<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;

// example endpoints
Route::get('', function () {
  return 'hello laravel';
});

Route::get('/hello', function () {
  return 'hello ' . random_int(0, 99);
});

Route::get('/random', function () {
  return Arr::random([1,2,3,4]);
});
