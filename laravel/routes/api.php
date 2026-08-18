<?php

use App\Controllers\AiController;
use App\Controllers\ArticlesController;
use App\Controllers\AuthController;
use App\Controllers\CommentsController;
use App\Controllers\HttpController;
use App\Controllers\MailsController;
use App\Controllers\ScrapeController;
use App\Controllers\TagsController;
use App\Controllers\UploadsController;
use App\Controllers\UserController;
use App\Controllers\UsersController;
use Illuminate\Support\Facades\Route;
use App\Controllers\ExamplesController;

Route::get('/users', [UsersController::class, "index"]);
Route::post('/user', [UserController::class, "create"]);
Route::post('/auth/login', [AuthController::class, "login"]);
Route::get('/articles', [ArticlesController::class, "index"]);
Route::get('/comments', [CommentsController::class, 'index']);

Route::get('/uploads/{id}', [UploadsController::class, 'show']);

Route::get('/http/github', [HttpController::class, 'github']);
Route::get('/http/pokemon', [HttpController::class, 'pokemon']);

Route::get('/scrape/cern', [ScrapeController::class, 'cern']);
Route::get('/scrape/sae', [ScrapeController::class, 'sae']);

Route::post('/ai/chat', [AiController::class, 'chat']);
Route::post('/ai/summarize', [AiController::class, 'summarize']);
Route::post('/ai/nsfw', [AiController::class, 'nsfw']);

Route::middleware(['auth:sanctum'])->group(function () {
  Route::get('/user', [UserController::class, "index"]);
  Route::patch('/user', [UserController::class, "update"]);
  Route::post('/auth/logout', [AuthController::class, "logout"]);
  Route::post('/auth/impersonate', [AuthController::class, 'impersonate']);

  Route::post('/articles', [ArticlesController::class, "create"]);
  Route::patch('/articles', [ArticlesController::class, "update"]);
  Route::delete('/articles', [ArticlesController::class, "destroy"]);

  Route::post('/comments', [CommentsController::class, 'create']);
  Route::patch('/comments', [CommentsController::class, 'update']);
  Route::delete('/comments', [CommentsController::class, 'destroy']);

  Route::get('/tags', [TagsController::class, 'index']);
  Route::post('/tags', [TagsController::class, 'create']);
  Route::put('/tags/assign', [TagsController::class, 'assign']);

  Route::get('/uploads', [UploadsController::class, 'index']);
  Route::post('/uploads', [UploadsController::class, 'create']);
  Route::patch('/uploads', [UploadsController::class, 'update']);
  Route::delete('/uploads', [UploadsController::class, 'destroy']);

  Route::post('/mails/newsletter', [MailsController::class, 'newsletter']);
});

// example endpoints
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
Route::post('/examples/rps', [ExamplesController::class, 'rps']);
