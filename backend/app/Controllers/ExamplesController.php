<?php

namespace App\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class ExamplesController {
  function ping() {
    return 'pong';
  }

  function about(Request $request) {
    return [
      'php' => phpversion(),
      'host' => $request->getHost(),
      'port' => $request->getPort(),
      'method' => $request->getMethod(),
    ];
  }

  function random(Request $request) {
    $array = ['a','b','c'];
    Arr::random($array);
  }

  function echo(Request $request) {
    $text = $request->input('text'); // $_POST['text']
    return $text;
  }
}
