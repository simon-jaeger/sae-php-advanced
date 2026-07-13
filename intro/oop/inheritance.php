<?php

class Shape {
  public float $x = 0;
  public float $y = 0;

  // virtual method, default implementation
  function area() {
    return 0;
  }

  // polymorphic utility method
  static function largest(Shape $a, Shape $b) {
    $areaA = $a->area();
    $areaB = $b->area();
    if ($areaA > $areaB) return $a;
    else return $b;
  }
}

class Circle extends Shape {
  public float $radius;

  function __construct($radius) {
    $this->radius = $radius;
  }

  // override of virtual method, specific implementation
  function area() {
    return $this->radius ** 2 * pi();
  }
}

class Rectangle extends Shape {
  public float $width;
  public float $height;

  function __construct($width, $height) {
    $this->width = $width;
    $this->height = $height;
  }

  // override of virtual method, specific implementation
  function area() {
    return $this->width * $this->height;
  }
}

$circle = new Circle(3);
$rect = new Rectangle(6, 6);

print_r([
  $circle->area(), // 28.27...
  $rect->area(), // 36
]);

print_r(Shape::largest($circle, $rect)); // $rect
