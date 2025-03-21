<?php

use App\Controllers\AuthController;
use App\Controllers\CommentsController;
use App\Controllers\TagsController;
use Illuminate\Support\Facades\Route;
use App\Controllers\ExamplesController;
use App\Controllers\ArticlesController;
use App\Controllers\UserController;
use App\Controllers\UploadsController;
use App\Controllers\MailsController;

// guest endpoints
Route::post('/auth/login', [AuthController::class, 'login']);
Route::post('/user', [UserController::class, 'create']);
Route::get('/articles', [ArticlesController::class, 'index']);
Route::get('/comments', [CommentsController::class, 'index']);
Route::get('/tags', [TagsController::class, 'index']);

// user endpoints
Route::middleware(['auth:sanctum'])->group(function () {
  Route::post('/auth/logout', [AuthController::class, 'logout']);

  Route::get('/user', [UserController::class, 'index']);
  Route::patch('/user', [UserController::class, 'update']);
  Route::delete('/user', [UserController::class, 'destroy']);

  Route::post('/articles', [ArticlesController::class, 'create']);
  Route::patch('/articles', [ArticlesController::class, 'update']);
  Route::delete('/articles', [ArticlesController::class, 'destroy']);

  Route::post('/comments', [CommentsController::class, 'create']);
  Route::patch('/comments', [CommentsController::class, 'update']);
  Route::delete('/comments', [CommentsController::class, 'destroy']);

  Route::post('/tags', [TagsController::class, 'create']);
  Route::put('/tags/assign', [TagsController::class, 'assign']);

  Route::post('/uploads', [UploadsController::class, 'create']);
  Route::delete('/uploads', [UploadsController::class, 'destroy']);

  Route::post('/mails/send', [MailsController::class, 'send']);
});

























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
