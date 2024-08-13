<?php

namespace App\Classes;

class Console {
  static function log($value) {
    if (!is_string($value)) $value = json_encode($value);
    print($value . PHP_EOL);
  }

  static function ask($question) {
    self::log($question);
    $answer = readline('> ');
    return $answer;
  }
}
