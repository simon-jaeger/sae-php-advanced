<?php

class Circle {
  public float $radius;

  public function __construct($radius) {
    $this->radius = $radius;
  }

  function diameter() {
    return $this->radius * 2;
  }

  function circumference() {
    return 2 * pi() * $this->radius;
  }

  function area() {
    return pi() * $this->radius ** 2;
  }
}

$circle = new Circle(4);
print_r([
  $circle->radius,
  $circle->diameter(),
  $circle->circumference(),
  $circle->area(),
]);
