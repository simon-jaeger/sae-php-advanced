<?php

namespace App\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

// user crud with validation and shortcut methods
class UserController {
  function show(Request $request) {
    return \Auth::user();
  }

  function create(Request $request) {
    $payload = $request->validate([
      'email' => ['required', 'email'],
      'password' => ['required', 'min:8'],
    ]);
    return User::create($payload);
  }

  function update(Request $request) {
    $user = \Auth::user();
    $payload = $request->validate([
      'email' => ['sometimes', 'email'],
      'password' => ['sometimes', 'min:8'],
    ]);
    $user->update($payload);
    return $user;
  }

  function destroy(Request $request) {
    $user = \Auth::user();
    $user->delete();
    return $user;
  }
}
