<?php

class Dice {
  public int $value = 1;
  public int $maxValue;

  function __construct($maxValue) {
    $this->maxValue = $maxValue;
  }

  function roll() {
    $this->value = random_int(1, $this->maxValue);
  }
}
