<?php

namespace App\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticlesController {
  function index(Request $request) {
    return Article::all();
  }

  function create(Request $request) {
    $payload = Article::validate($request);
    // $article = Article::create($payload);
    $article = \Auth::user()->articles()->create($payload);
    return $article;
  }

  function update(Request $request) {
    $id = $request->input('id');
    $payload = Article::validate($request);
    // $article = Article::findOrFail($id);
    $article = \Auth::user()->articles()->findOrFail($id);
    $article->update($payload);
    return $article;
  }

  function destroy(Request $request) {
    $id = $request->input('id');
    // $article = Article::findOrFail($id);
    $article = \Auth::user()->articles()->findOrFail($id);
    $article->delete();
    return $article;
  }
}
