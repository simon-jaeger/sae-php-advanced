<?php

class Shape {
  public float $x = 0;
  public float $y = 0;

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
print_r([
  $circle->x, // inherited, all shapes have x
  $circle->y, // inhertited, all shapes have y
  $circle->radius, // not inherited, only circles have radius
  $circle->position(), // inherited, all shapes can get their position
  $circle->diameter() // not inherited, only circles can calculate their diameter
]);

class Rectangle extends Shape {
  public float $width;
  public float $height;

  public static $german = 'Rechteck';

  function __construct($width, $height) {
    $this->width = $width;
    $this->height = $height;
  }

  function area() {
    return $this->width * $this->height;
  }

  static function makeSquare($size) {
    return new Rectangle($size, $size);
  }

  static function largest(Rectangle $a, Rectangle $b) {
    $areaA = $a->area();
    $areaB = $b->area();
    if ($areaA > $areaB) return $a;
    else return $b;
  }
}

print(Rectangle::$german . "\n"); // Rechteck

$square = Rectangle::makeSquare(4);
print($square->width . "\n"); // 4
print($square->height . "\n"); // 4

$rect = new Rectangle(10, 20);
var_dump(Rectangle::largest($square, $rect)); // $rect

class Util {
  static function pickRandom($array) {
    $index = random_int(0, count($array) - 1);
    return $array[$index];
  }
}

print(Util::pickRandom([1, 2, 3]));
