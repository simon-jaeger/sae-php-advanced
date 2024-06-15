<?php

echo '<style>body { background: #111; color: #ddd; font-family: monospace; white-space: pre; }</style>';

function display($value) {
  echo "\n";
  print_r(json_encode($value, JSON_PRETTY_PRINT));
  echo "\n";
}

/////////////////////////////////////////////////////////////////////////////

class Circle {
  var int $radius;

  function __construct($radius) {
    $this->radius = $radius;
  }

  function circumference() {
    return 2 * pi() * $this->radius;
  }

  function area() {
    return pi() * $this->radius ** 2;
  }
}

// $circle = new Circle(4);
// display($circle);
// display($circle->circumference());
// display($circle->area());

class Rectangle {
  var int $width;
  var int $height;

  function __construct($width, $height) {
    $this->width = $width;
    $this->height = $height;
  }

  function circumference() {
    return 2 * $this->width + 2 * $this->height;
  }

  function area() {
    return $this->width * $this->height;
  }

  function diagonal() {
    return hypot($this->width, $this->height);
  }

  function isSquare() {
    return $this->width === $this->height;
  }
}

// $rectangle = new Rectangle(5, 10);
// display($rectangle);
// display($rectangle->circumference());
// display($rectangle->area());
// display($rectangle->diagonal());
// display($rectangle->isSquare());

class Coin {
  var bool $isHeads = false;

  function flip() {
    $this->isHeads = rand(0, 1) < 0.5;
  }
}

// $coin = new Coin();
// for ($i = 0; $i < 10; $i++) {
//  $coin->flip();
//  display($coin->isHeads);
// }

class Dice {
  var int $value = 1;
  var int $max;

  function __construct($max = 6) {
    $this->max = $max;
  }

  function roll() {
    $this->value = random_int(1, $this->max);
  }
}

// $dice = new Dice(20);
// for ($i = 0; $i < 10; $i++) {
//   $dice->roll();
//   display($dice->value);
// }
