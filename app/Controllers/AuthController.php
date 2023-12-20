<?php

namespace App\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

// token based authentication
class AuthController {
  function login(Request $request) {
    $email = $request->input('email');
    $password = $request->input('password');

    $user = User::where('email', $email)->first();
    if (!$user || !\Hash::check($password, $user->password)) {
      return abort(401, 'wrong credentials');
    }

    $token = $user->createToken('bearer');
    return [
      'token' => $token->plainTextToken,
      'user' => $user,
    ];
  }

  function logout(Request $request) {
    \Auth::user()->currentAccessToken()->delete();
    return 'ok';
  }
}
