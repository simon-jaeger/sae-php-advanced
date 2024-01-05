<?php

namespace App\Controllers;

use App\Models\Tweet;
use Illuminate\Http\Request;

class TweetsController {
  function index() {
    return Tweet::all();
  }

  function create(Request $request) {
    $userId = \Auth::user()->id;
    $payload = $request->validate([
      'text' => ['required', 'min:3', 'max: 255']
    ]);
    return Tweet::create([
      'user_id' => $userId,
      ...$payload,
    ]);
  }

  function destroy(Request $request) {
    $userId = \Auth::user()->id;
    $id = $request->input('id');
    $tweet = Tweet::where('user_id', $userId)->findOrFail($id);
    $tweet->delete();
    return $tweet;
  }
}
