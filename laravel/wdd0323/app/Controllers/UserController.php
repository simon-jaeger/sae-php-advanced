<?php

namespace App\Controllers;

use App\Models\Article;
use App\Models\User;
use Illuminate\Http\Request;

class UserController {
  function index(Request $request) {
    // TODO: just for testing, remove later
    return User::all();
  }

  function create(Request $request) {
    $payload = User::validate($request);
    return User::create($payload);
  }

  function update(Request $request) {
    $user = User::findOrFail(1);
    $payload = User::validate($request);
    $user->save();
    return $user;
  }

  function destroy(Request $request) {
    $user = User::findOrFail(1);
    $user->delete();
    return $user;
  }
}
