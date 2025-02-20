<?php

namespace App\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class ExamplesController {
  function ping(Request $request) {
    return 'pong';
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

  function bmi(Request $request) {
    $height = $request->input('height');
    $weight = $request->input('weight');

    $bmi = $weight / $height ** 2;
    $category = 'underweight';
    if ($bmi > 18.5) $category = 'normal';
    if ($bmi > 25) $category = 'overweight';

    return [
      'height' => $height,
      'weight' => $weight,
      'bmi' => $bmi,
      'category' => $category,
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
