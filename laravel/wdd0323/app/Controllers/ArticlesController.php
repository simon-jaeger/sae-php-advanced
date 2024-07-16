<?php

namespace App\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticlesController {
  function read(Request $request) {
    return Article::all();
  }

  function create() {
    $article = Article::make();
    $article->title = 'my first article';
    $article->content = 'foobar';
    $article->save();
    return $article;
  }
}
