<?php

// NOTE: public used to be var prior to php 7.1

class Circle {
  public float $radius;

  function __construct($radius) {
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
print($circle->radius); // 4
print($circle->diameter()); // 8
