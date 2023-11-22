<?php

namespace App\Controllers;

use Illuminate\Http\Request;

class ExamplesController {
  function ping(Request $request) {
    return 'pong';
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
    $a = $request->input('a');
    $b = $request->input('b');
    return $a + $b;
  }

  function about(Request $request) {
    return [
      'laravel' => \App::version(),
      'php' => phpversion(),
      'ini' => php_ini_loaded_file(),
      'client' => $request->getClientIp(),
      'server' => $request->getHost() . ':' . $request->getPort(),
    ];
  }
}
