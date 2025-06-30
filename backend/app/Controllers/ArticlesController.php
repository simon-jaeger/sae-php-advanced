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

    // order
    $orderBy = $request->input('order_by', 'created_at');
    $orderDir = $request->input('order_dir', 'asc');
    $query->orderBy($orderBy, $orderDir);

    // limit, offset
    $limit = $request->input('limit', 1000);
    $offset = $request->input('offset', 0);
    $query->limit($limit);
    $query->offset($offset);

    // return $query->toSql(); // for debugging
    return $query->get();
  }

  function create(Request $request) {
    $payload = $request->validate(Article::$rules);
    $article = Auth::user()->articles()->create($payload);
    return $article;
  }

  function update(Request $request) {
    $id = $request->input('id');
    $payload = $request->validate(Article::$rules);
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
