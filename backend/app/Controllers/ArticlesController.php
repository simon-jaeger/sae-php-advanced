<?php

namespace App\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticlesController {
  function index(Request $request) {
    $id = $request->input('id');
    $userId = $request->input('user_id');
    $title = $request->input('title');
    $orderBy = $request->input('order_by', 'created_at');
    $orderDir = $request->input('order_dir', 'asc');
    $limit = $request->input('limit', 1000);
    $offset = $request->input('offset', 0);
    $tagIds = $request->input('tag_ids');

    $query = Article::query();
    if ($id) return $query->where('id', $id)->firstOrFail();
    if ($userId) $query->where('user_id', $userId);
    if ($title) $query->where('title', 'like', "%$title%");
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

    $query->orderBy($orderBy, $orderDir);
    $query->limit($limit);
    $query->offset($offset);

    // return $query->toSql(); // for debugging
    return $query->get();
  }

  function search(Request $request) {
    $title = $request->input('title');
    return Article::select('id', 'title')
      ->get()
      ->map(fn($a) => [
        'id' => $a->id,
        'title' => $a->title,
        'distance' => levenshtein($title, $a->title),
        'similarity' => similar_text($title, $a->title),
      ])
      ->sortBy('distance')
      ->values();
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
