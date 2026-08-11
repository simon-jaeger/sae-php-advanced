<?php

namespace App\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController {
  function index(Request $request) {
    $query = User::query()->select("id", "created_at");
    return $query->get();
  }
}
