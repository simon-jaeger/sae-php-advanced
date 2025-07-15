<?php

namespace App\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticlesController {
  function index(Request $request) {
    return Article::all();
  }

  function create(Request $request) {
    $payload = $request->validate(Article::$rules);
    $article = Article::create($payload);
    return $article;
  }

  function update(Request $request) {
    $id = $request->input('id');
    $article = Article::findOrFail($id);
    $payload = $request->validate(Article::$rules);
    $article->update($payload);
    return $article;
  }

  function destroy(Request $request) {
    $id = $request->input('id');
    $article = Article::findOrFail($id);
    $article->delete();
    return $article;
  }
}
