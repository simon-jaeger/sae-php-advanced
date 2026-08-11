<?php

namespace App\Controllers;

use App\Mails\WelcomeMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class UserController {
  function index() {
    return Auth::user();
  }

  function update(Request $request)  {
    $user = Auth::user();
    $payload = User::validate($request);
    $user->update($payload);
    return $user;
  }

  function create(Request $request) {
    $payload = User::validate($request);
    $user = User::create($payload);
    Mail::send(new WelcomeMail($user));
    return $user;
  }
}
