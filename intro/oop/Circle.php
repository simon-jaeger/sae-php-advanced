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
  $circle->radius, // 4
  $circle->diameter(), // 8
  $circle->circumference(), // 25.13...
  $circle->area(), // 50.26...
]);
