<?php

namespace App\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticlesController {
  function index() {
    return Article::all();
  }

  function create(Request $request) {
    $payload = Article::validate($request);
    $article = Auth::user()->articles()->create($payload);
    return $article;
  }

  function update(Request $request) {
    $payload = Article::validate($request);
    $id = $request->input('id');
    $article = Auth::user()->articles()->findOrFail($id);
    $article->update($payload);
    return $article;
  }

  function destroy(Request $request) {
    $id = $request->input('id');
    $article = Auth::user()->articles()->findOrFail($id);
    $article->delete();
    return $article;
  }
}
