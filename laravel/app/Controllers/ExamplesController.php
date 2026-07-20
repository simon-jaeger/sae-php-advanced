<?php

namespace App\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class ExamplesController {
  function hello() {
    return 'hello from controller';
  }

  function about() {
    return [
      'name' => 'sae example backend',
      'version' => '0.0.1',
      'php' => phpversion(),
    ];
  }

  function random() {
    $array = ['a', 'b', 'c'];
    return Arr::random($array);
  }

  function echo(Request $request) {
    $text = $request->input('text');
    return $text;
  }

  function sum(Request $request) {
    $a = $request->input('a');
    $b = $request->input('b');
    return $a + $b;
  }

  function reverse(Request $request) {
    $text = $request->input('text');
    return Str::reverse($text); // handles unicode like umlauts better than strrev()
  }

  function count(Request $request) {
    $text = $request->input('text');
    return Str::wordCount($text);
  }

  function palindrom(Request $request) {
    $text = $request->input('text');
    return Str::reverse($text) === $text ? 'yes' : 'no';
  }

  function anagram(Request $request) {
    $a = $request->input('a');
    $b = $request->input('b');
    $normalize = function ($s) {
      $s = str_split($s);
      sort($s);
      return implode($s);
    };
    return $normalize($a) === $normalize($b) ? 'yes' : 'no';
  }

  function temperature(Request $request) {
    $celsius = $request->input('celsius');
    return [
      'celsius' => $celsius,
      'kelvin' => $celsius + 273.15,
      'fahrenheit' => ($celsius * 9 / 5) + 32,
    ];
  }

  function caesar(Request $request) {
    $text = $request->input('text');
    $shift = $request->input('shift');

    $alphabet = range('a', 'z');
    $encrypted = '';

    foreach (str_split($text) as $char) {
      $from = array_search($char, $alphabet);
      $to = ($from + $shift) % 26;
      $encrypted .= $alphabet[$to];
    }

    return [
      'original' => $text,
      'encrypted' => $encrypted,
    ];
  }
}
