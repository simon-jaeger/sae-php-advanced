<?php

class Shape {
  public float $x;
  public float $y;

  function position() {
    return $this->x . '/' . $this->y;
  }
}

class Circle extends Shape {
  public float $radius;

  function __construct($radius) {
    $this->radius = $radius;
  }

  function diameter() {
    return $this->radius * 2;
  }
}

$circle = new Circle(3);
$circle->x = 1;
$circle->y = 2;
var_dump([
  $circle->x, // inherited, all shapes have x
  $circle->y, // inhertited, all shapes have y
  $circle->radius, // not inherited, only circles have radius
  $circle->position(), // inherited, all shapes can get their position
  $circle->diameter() // not inherited, only circles can calculate their diameter
]);

class Rectangle extends Shape {
  public float $width;
  public float $height;

  function __construct($width, $height) {
    $this->width = $width;
    $this->height = $height;
  }
}

$rectangle = new Rectangle(10, 5);
