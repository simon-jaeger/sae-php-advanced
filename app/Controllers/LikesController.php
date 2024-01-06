<?php

namespace App\Controllers;

use App\Models\Like;
use Illuminate\Http\Request;

class LikesController {
  function index() {
    return Like::all();
  }

  function create(Request $request) {
    $tweetId = $request->input('tweet_id');
    $like = \Auth::user()->likes()->firstOrCreate(['tweet_id' => $tweetId]);
    return $like;
  }

  function destroy(Request $request) {
    $tweetId = $request->input('tweet_id');
    $like = \Auth::user()->likes()->where('tweet_id', $tweetId)->firstOrFail();
    $like->delete();
    return $like;
  }
}
