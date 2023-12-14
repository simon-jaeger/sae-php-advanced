<?php

namespace App\Controllers;

use Illuminate\Http\Request;

class UserController {
  function show(Request $request) {
    return \Auth::user();
  }
}
