<?php

namespace App\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticlesController {
  function index(Request $request) {
    return Article::all();
  }

  function create(Request $request) {
    $payload = $request->validate(Article::$rules);
    // $article = Article::create($payload);
    $article = Auth::user()->articles()->create($payload);
    return $article;
  }

  function update(Request $request) {
    $id = $request->input('id');
    // $article = Article::findOrFail($id);
    $article = Auth::user()->articles()->findOrFail($id);
    $payload = $request->validate(Article::$rules);
    $article->update($payload);
    return $article;
  }

  function destroy(Request $request) {
    $id = $request->input('id');
    // $article = Article::findOrFail($id);
    $article = Auth::user()->articles()->findOrFail($id);
    $article->delete();
    return $article;
  }
}
