<?php

namespace App\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticlesController {
  function index(Request $request) {
    // return Article::query()->get();
    $query = Article::query();

    // filter by user
    $userId = $request->input('user_id');
    if ($userId) $query->where('user_id', $userId);

    // filter by title
    $title = $request->input('title');
    if ($title) $query->where('title', 'like', "%$title%");

    // order
    $orderBy = $request->input('order_by', 'created_at');
    $orderDir = $request->input('order_dir', 'asc');
    $query->orderBy($orderBy, $orderDir);

    // limit, offset
    $limit = $request->input('limit');
    $offset = $request->input('offset');
    if ($limit) $query->limit($limit);
    if ($offset) $query->offset($offset);

    // get sql to understand/debug query
    // return $query->toSql();

    return $query->get();
  }

  function create(Request $request) {
    // $article = Article::create(['title' => 'foobar']);
    $payload = $request->validate([
      'title' => ['required', 'min:1', 'max: 200'],
      'content' => ['required', 'min:1', 'max: 60000'],
    ]);
    return \Auth::user()->articles()->create($payload);
  }

  function update(Request $request) {
    $id = $request->input('id');
    $article = \Auth::user()->articles()->findOrFail($id);
    // $article->title = 'foobar';
    // $article->save();
    $payload = $request->validate([
      'title' => ['sometimes', 'min:1', 'max: 200'],
      'content' => ['sometimes', 'min:1', 'max: 60000'],
      'tag_ids' => ['sometimes'],
    ]);
    $article->update($payload);
    return $article;
  }

  function destroy(Request $request) {
    $id = $request->input('id');
    $article = \Auth::user()->articles()->findOrFail($id);
    $article->delete();
    return $article;
  }
}
