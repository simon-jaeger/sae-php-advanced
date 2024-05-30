<?php

namespace App\Controllers;

use App\Models\Tweet;
use Illuminate\Http\Request;

class TweetsController {
  function index(Request $request) {
    $query = Tweet::query();

    $userId = $request->input('user_id');
    if ($userId) $query->where('user_id', $userId);

    $orderBy = $request->input('orderBy');
    $orderDir = $request->input('orderDir', 'asc');
    if ($orderBy) $query->orderBy($orderBy, $orderDir);

    return $query->get();
  }

  function create(Request $request) {
    $payload = $request->validate([
      'text' => ['required', 'min:3', 'max: 255']
    ]);
    return \Auth::user()->tweets()->create($payload);
  }

  function destroy(Request $request) {
    $id = $request->input('id');
    $tweet = \Auth::user()->tweets()->findOrFail($id);
    $tweet->delete();
    return $tweet;
  }
}
