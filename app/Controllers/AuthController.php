<?php

namespace App\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController {
  function login(Request $request) {
    $email = $request->input('email');
    $password = $request->input('password');

    $user = User::where('email', $email)->first();
    if ($user->password !== $password) {
      return abort(401, 'wrong credentials');
    }

    $token = $user->createToken('bearer');
    return [
      'user' => $user,
      'token' => $token->plainTextToken,
    ];
  }

  function logout(Request $request) {
    \Auth::user()->currentAccessToken()->delete();
    return 'ok';
  }
}
