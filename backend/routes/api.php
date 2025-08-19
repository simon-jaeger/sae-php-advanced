<?php

use Illuminate\Support\Facades\Route;
use App\Controllers\ExamplesController;
use App\Controllers\ArticlesController;
use App\Controllers\AuthController;
use App\Controllers\UserController;
use App\Controllers\CommentsController;
use App\Controllers\TagsController;
use App\Controllers\UploadsController;
use App\Controllers\MailsController;
use App\Controllers\HttpController;
use App\Controllers\AiController;
use App\Controllers\AvatarsController;
use App\Controllers\ScrapeController;
use App\Controllers\TttController;

// guest endpoints
Route::post('/auth/login', [AuthController::class, 'login']);
Route::post('/user', [UserController::class, 'create']);
Route::get('/articles', [ArticlesController::class, 'index']);
Route::get('/articles/search', [ArticlesController::class, 'search']);
Route::get('/comments', [CommentsController::class, 'index']);
Route::get('/tags', [TagsController::class, 'index']);
Route::get('/uploads/{id}', [UploadsController::class, 'show']);

// user endpoints
Route::middleware(['auth:sanctum'])->group(function () {
  Route::post('/auth/logout', [AuthController::class, 'logout']);
  Route::post('/auth/impersonate', [AuthController::class, 'impersonate']);

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

  Route::get('/uploads', [UploadsController::class, 'index']);
  Route::post('/uploads', [UploadsController::class, 'create']);
  Route::patch('/uploads', [UploadsController::class, 'update']);
  Route::delete('/uploads', [UploadsController::class, 'destroy']);
});

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

// extra endpoints
Route::post('/mails/send', [MailsController::class, 'send']);
Route::get('/http/github', [HttpController::class, 'github']);
Route::get('/http/pokemon', [HttpController::class, 'pokemon']);
Route::post('/ai/prompt', [AiController::class, 'prompt']);
Route::get('/avatars/{id}', [AvatarsController::class, 'show']);
Route::get('/scrape/cern', [ScrapeController::class, 'cern']);
Route::get('/scrape/sae', [ScrapeController::class, 'sae']);
Route::get('/ttt', [TttController::class, 'show']);
Route::post('/ttt', [TttController::class, 'create']);
Route::patch('/ttt', [TttController::class, 'update']);
Route::delete('/ttt', [TttController::class, 'destroy']);
