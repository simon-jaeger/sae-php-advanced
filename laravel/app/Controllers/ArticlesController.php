<?php

namespace App\Controllers;

use App\Models\Article;

class ArticlesController {
  function index() {
    $articles = Article::all();
    return $articles;
  }
}
