<?php

function prints($value) {
  print(json_encode($value, JSON_PRETTY_PRINT) . PHP_EOL);
}

////////////////////////////////////////////////////////////////////////////////

class Coin {
  public bool $isHeads = false;

  function flip() {
    $this->isHeads = rand(0, 1) < 0.5;
  }
}

$coin = new Coin();
for ($i = 0; $i < 10; $i++) {
  $coin->flip();
  prints($coin->isHeads);
}

////////////////////////////////////////////////////////////////////////////////

class Dice {
  public int $value = 1;
  public int $max;

  function __construct($max = 6) {
    $this->max = $max;
  }

  function roll() {
    $this->value = random_int(1, $this->max);
  }
}

$dice = new Dice(20);
for ($i = 0; $i < 10; $i++) {
  $dice->roll();
  prints($dice->value);
}
