<?php

function prints($value) {
  print(json_encode($value, JSON_PRETTY_PRINT) . PHP_EOL);
}

////////////////////////////////////////////////////////////////////////////////

class Circle {
  public int $radius;

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

$circle = new Circle(4);
prints($circle);
prints($circle->circumference());
prints($circle->area());

////////////////////////////////////////////////////////////////////////////////

class Rectangle {
  public int $width;
  public int $height;

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

$rectangle = new Rectangle(5, 10);
prints($rectangle);
prints($rectangle->circumference());
prints($rectangle->area());
prints($rectangle->diagonal());
prints($rectangle->isSquare());
