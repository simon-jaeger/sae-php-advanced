<?php

namespace App\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

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

  function avatar(Request $request) {
    $user = \Auth::user();
    $request->validate([
      'avatar' => ['sometimes', 'image', 'max:2048'],
    ]);
    $file = $request->file('avatar');
    if ($user->avatar) \Storage::delete($user->avatar);
    $user->avatar = \Storage::putFile('uploads/avatars', $file);
    $user->save();
    return $user;
  }
}
