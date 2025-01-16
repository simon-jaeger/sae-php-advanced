<?php

class Shape {
  public float $x = 0;
  public float $y = 0;

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

  // usable directly on class
  // used for utility functions or "custom constructors", like makeSquare
  static function makeSquare($size) {
    return new Rectangle($size, $size);
  }
}

$square = Rectangle::makeSquare(4);
var_dump($square);
