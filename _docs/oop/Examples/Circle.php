<?php

class Circle {
  public int $radius = 0;

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
