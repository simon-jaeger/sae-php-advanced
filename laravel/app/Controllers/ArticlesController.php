<?php

namespace App\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticlesController {
  function index() {
    $articles = Article::all();
    return $articles;
  }

  function create(Request $request) {
    $article = Article::create([
      'title' => $request->input("title"),
      'content' => $request->input("content"),
    ]);
    return $article;
  }

  function update(Request $request) {
    $id = $request->input("id");
    $article = Article::findOrFail($id);
    $article->title = $request->input("title");
    $article->content = $request->input("content");
    $article->save();
    return $article;
  }

  function destroy(Request $request) {
    $id = $request->input("id");
    $article = Article::findOrFail($id);
    $article->delete();
    return $article;
  }
}
