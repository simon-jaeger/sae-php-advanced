<?php

// create classes based on real world objects
// https://www.google.com/search?q=dice

class Dice {
  public int $value;
  public int $minValue = 1;
  public int $maxValue;

  function __construct($maxValue) {
    $this->maxValue = $maxValue;
  }

  function roll() {
    $this->value = random_int($this->minValue, $this->maxValue);
    return $this->value;
  }
}

$d6 = new Dice(6);
$d20 = new Dice(20);

$d6->roll();
$d20->roll();
print($d6->value + $d20->value);
