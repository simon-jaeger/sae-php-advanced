<?php

class RNG {
  static function pickRandom($array) {
    $index = random_int(1, count($array) - 1);
    return $array[$index];
  }
}

