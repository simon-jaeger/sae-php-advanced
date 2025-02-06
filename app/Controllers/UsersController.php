<?php

namespace App\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController {
  function index(Request $request) {
    return User::all();
  }

  function create(Request $request) {
    $payload = User::validate($request);
    $user = User::create($payload);
    return $user;
  }

  function update(Request $request) {
    $id = $request->input('id');
    $user = User::findOrFail($id);
    $payload = User::validate($request);
    $user->update($payload);
    return $user;
  }

  function destroy(Request $request) {
    $id = $request->input('id');
    $user = User::findOrFail($id);
    $user->delete();
    return $user;
  }
}
