<?php

namespace App\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticlesController {
  function index(Request $request) {
    $query = Article::query();

    $id = $request->input('id');
    if($id) return $query->where('id', $id)->firstOrFail();

    $userId = $request->input('user_id');
    if($userId) $query->where('user_id', $userId);

    $title = $request->input('title');
    if($title) $query->where('title', 'like', "%$title%");

    // return $query->toSql(); // for debugging
    return $query->get();
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
