<?php

namespace App\Controllers;

use Illuminate\Http\Request;

class ExamplesController {
  function ping(Request $request) {
    return 'pong';
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

  function temperature(Request $request) {
    $celsius = $request->input('celsius');
    return [
      'celsius' => $celsius,
      'kelvin' => $celsius + 273.15,
      'fahrenheit' => ($celsius * 9 / 5) + 32,
    ];
  }
}
