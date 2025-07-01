<?php

class Rectangle {
  public float $width;
  public float $height;

  function __construct($width, $height) {
    $this->width = $width;
    $this->height = $height;
  }

  function circumference() {
    return 2 * ($this->width + $this->height);
  }

  function area() {
    return $this->width * $this->height;
  }

  function diagonal() {
    return hypot($this->width, $this->height);
  }

  function isSquare() {
    return $this->width === $this->height;
  }

  static function makeSquare($size) {
    return new Rectangle($size, $size);
  }
}

$rect1 = new Rectangle(3, 4);
$rect2 = new Rectangle(5, 2);
$rect3 = new Rectangle(1, 9);

$square = Rectangle::makeSquare(5);

if ($rect1->area() > $rect2->area()) {
  print('rect 1 is larger');
}
