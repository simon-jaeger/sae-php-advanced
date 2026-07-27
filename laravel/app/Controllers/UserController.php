<?php

namespace App\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController {
  function index() {
    return User::first();
  }

  function create(Request $request) {
    $payload = User::validate($request);
    $user = User::create($payload);
    return $user;
  }
}
