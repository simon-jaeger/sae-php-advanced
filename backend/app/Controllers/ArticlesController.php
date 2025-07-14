<?php

namespace App\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticlesController {
  function index(Request $request) {
    return Article::all();
  }

  function create(Request $request) {
    $article = new Article();
    $article->title = 'foo';
    $article->content = 'lorem ipsum';
    $article->save();
    return $article;
  }
}
