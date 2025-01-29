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

  function reverse(Request $request) {
    $text = $request->input('text');
    return strrev($text);
  }

  function sum(Request $request) {
    $numbers = $request->input('numbers');
    return array_sum($numbers);
  }

  function count(Request $request) {
    $text = $request->input('text');
    return str_word_count($text);
  }

  function temperature(Request $request) {
    $celsius = $request->input('celsius');
    return [
      'celsius' => $celsius,
      'kelvin' => $celsius + 273.15,
      'fahrenheit' => ($celsius * 9 / 5) + 32,
    ];
  }

  function rps(Request $request) {
    $attack = $request->input('attack');
    $defense = Arr::random(['rock', 'paper', 'scissors']);

    $result = '';
    if ($attack === $defense) $result = 'draw';
    else if (
      ($attack === 'rock' && $defense === 'scissors') ||
      ($attack === 'paper' && $defense === 'rock') ||
      ($attack === 'scissors' && $defense === 'paper')
    ) $result = 'you win';
    else $result = 'you lose';

    return [
      'attack' => $attack,
      'defense' => $defense,
      'result' => $result,
    ];
  }
}
