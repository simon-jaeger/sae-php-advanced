<?php

class Dice {
  public int $value = 1;
  public int $max;

  function __construct($max) {
    $this->max = $max;
  }

  function roll() {
    $this->value = random_int(1, $this->max);
  }
}
