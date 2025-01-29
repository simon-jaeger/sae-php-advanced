<?php

namespace App\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class ExamplesController {
  function hello() {
    return 'hello' . random_int(0, 99);
  }

  function random() {
    $array = ['a','b','c'];
    return Arr::random($array);
  }

  function about(Request $request) {
    return [
      'php' => phpversion(),
      'ini' => php_ini_loaded_file(),
      'host' => $request->getHost(),
      'port' => $request->getPort(),
      'method' => $request->getMethod(),
    ];
  }

  function echo(Request $request) {
    $text = $request->input('text');
    return $text;
  }
}
