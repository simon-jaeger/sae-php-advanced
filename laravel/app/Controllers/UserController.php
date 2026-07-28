<?php

namespace App\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController {
  function index() {
    return Auth::user();
  }

  function create(Request $request) {
    $payload = User::validate($request);
    $user = User::create($payload);
    return $user;
  }
}
