<?php

class Dice {
  public int $value = 1;

  function roll() {
    $this->value = random_int(1, 6);
  }
}
