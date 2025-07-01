<?php

class Shape {
  public float $x = 0;
  public float $y = 0;

  function position() {
    return $this->x . '/' . $this->y;
  }

  function area() { // virtual method, to be implemented in child class
  }
}

class Circle extends Shape {
  public float $radius;

  function __construct($radius) {
    $this->radius = $radius;
  }

  function area() {
    return $this->radius ** 2 * pi();
  }

  function diameter() {
    return $this->radius * 2;
  }
}

class Rectangle extends Shape {
  public float $width;
  public float $height;

  function __construct($width, $height) {
    $this->width = $width;
    $this->height = $height;
  }

  function area() {
    return $this->width * $this->height;
  }

  static function makeSquare($size) { // named constructor
    return new Rectangle($size, $size);
  }

  static function largest(Rectangle $a, Rectangle $b) {
    $areaA = $a->area();
    $areaB = $b->area();
    if ($areaA > $areaB) return $a;
    else return $b;
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
  $circle->area(), // override of virtual method in parent class
  $circle->diameter() // not inherited, only circles can calculate their diameter
]);

$square = Rectangle::makeSquare(4);
print($square->width . "\n"); // 4
print($square->height . "\n"); // 4

$rect = new Rectangle(10, 20);
var_dump(Rectangle::largest($square, $rect)); // $rect

