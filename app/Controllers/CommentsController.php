<?php

namespace App\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentsController {
  function index(Request $request) {
    return Comment::all();
  }

  function create(Request $request) {
    $payload = Comment::validate($request);
    $comment = Auth::user()->comments()->create($payload);
    return $comment;
  }

  function update(Request $request) {
    $payload = Comment::validate($request);
    $id = $request->input('id');
    $comment = Auth::user()->comments()->findOrFail($id);
    $comment->update($payload);
    return $comment;
  }

  function destroy(Request $request) {
    $id = $request->input('id');
    $comment = Auth::user()->comments()->findOrFail($id);
    $comment->delete();
    return $comment;
  }
}
