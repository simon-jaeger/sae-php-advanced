<?php

class Util {
  static function pickRandom($array) {
    $index = random_int(1, count($array) - 1);
    return $array[$index];
  }
}

print(Util::pickRandom([1, 2, 3]));

print(Util::pickRandom(['red','green','blue']));
