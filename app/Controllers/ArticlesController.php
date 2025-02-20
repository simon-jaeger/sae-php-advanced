<?php

namespace App\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticlesController {
  function index(Request $request) {
    $query = Article::query();

    // filter by id
    $id = $request->input('id');
    if ($id) return $query->where('id', $id)->firstOrFail();

    // filter by user
    $userId = $request->input('user_id');
    if ($userId) $query->where('user_id', $userId);

    // filter by title
    $title = $request->input('title');
    if ($title) $query->where('title', 'like', "%$title%");

    // filter by tags
    $tagIds = $request->input('tag_ids');
    if ($tagIds) {
      $tagIds = explode(',', $tagIds);
      // $query->has('tags'); // articles that have tags
      // $query->has('tags', '>=', count($tagIds)); // articles that have at least that many tags
      $query->whereHas(
        'tags',
        fn($q) => $q->whereIn('tags.id', $tagIds), // only tags with ids that are part of the search array
        '>=',
        count($tagIds)
      );
    }

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
