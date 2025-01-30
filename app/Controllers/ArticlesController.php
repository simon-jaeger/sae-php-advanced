<?php

namespace App\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticlesController {
  function index() {
    return Article::all();
  }

  function create(Request $request) {
    $article = new Article();
    $article->title = $request->input('title');
    $article->content = $request->input('content');
    $article->save();
    return $article;
  }

  function update(Request $request) {
    $id = $request->input('id');
    /** @var Article $article */
    $article = Article::findOrFail($id);
    $article->title = $request->input('title');
    $article->content = $request->input('content');
    return $article;
  }

  function destroy(Request $request) {
    $id = $request->input('id');
    $article = Article::findOrFail($id);
    $article->delete();
    return $article;
  }
}
