<?php

class Shape {
  public float $x;
  public float $y;

  function position() {
    return $this->x . '/' . $this->y;
  }
}

class Circle extends Shape {
  public float $radius = 0;

  function __construct($radius) {
    $this->radius = $radius;
  }

  function diameter() {
    return $this->radius * 2;
  }
}

$circle = new Circle(1);
$circle->x = 4;
$circle->y = 8;
print($circle->position());

class Rectangle extends Shape {
  public float $width;
  public float $height;

  function __construct($width, $height) {
    $this->width = $width;
    $this->height = $height;
  }
}

$rectangle = new Rectangle(10, 5);
