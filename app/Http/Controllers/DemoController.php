<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController {
  function ping(Request $request) {
    return "pong";
  }

  function echo(Request $request) {
    $input = $request->input('input');
    return $input;
  }

  function reverse(Request $request) {
    $input = $request->input('input');
    return \Str::reverse($input);
  }

  function sum(Request $request) {
    $input = $request->input('input');
    return array_sum($input);
  }
}
