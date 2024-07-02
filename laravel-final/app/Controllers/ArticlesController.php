<?php

namespace App\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticlesController {
  function index(Request $request) {
    // return Article::query()->get();
    $query = Article::query();

    // filter
    $userId = $request->input('user_id');
    if ($userId) $query->where('user_id', $userId);

    // search
    $title = $request->input('title');
    if ($title) $query->where('title', 'like', "%$title%");

    // sort
    $orderBy = $request->input('orderBy', 'created_at');
    $orderDir = $request->input('orderDir', 'asc');
    $query->orderBy($orderBy, $orderDir);
    
    // paginate
    $limit = $request->input('limit');
    $offset = $request->input('offset');
    if ($limit) $query->limit($limit);
    if ($offset) $query->offset($offset);

    // get sql to understand/debug query
    // return $query->toSql();

    return $query->get();
  }

  function create(Request $request) {
    // $title = $request->input('title');
    // $article = Article::create(['title' => $title]);
    // return $article;
    $payload = $request->validate([
      'title' => ['required', 'min:1', 'max: 200'],
      'content' => ['required', 'min:1', 'max: 60000'],
    ]);
    return \Auth::user()->articles()->create($payload);
  }

  function update(Request $request) {
    $id = $request->input('id');
    $article = \Auth::user()->articles()->findOrFail($id);
    $payload = $request->validate([
      'title' => ['sometimes', 'min:1', 'max: 200'],
      'content' => ['sometimes', 'min:1', 'max: 60000'],
    ]);
    $article->fill($payload);
    $article->save();
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
