<?php

namespace App\Controllers;

use Illuminate\Http\Request;

class ExamplesController {
  function ping(Request $request) {
    return 'pong';
  }
}
