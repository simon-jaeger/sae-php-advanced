<?php

class Rectangle {
  public float $width;
  public float $height;

  function __construct($width, $height) {
    $this->width = $width;
    $this->height = $height;
  }

  function circumference() {
    return 2 * $this->width + 2 * $this->height;
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
}

$rect1 = new Rectangle(4, 8);
$rect2 = new Rectangle(3, 9);
$rect3 = new Rectangle(10, 20);

print($rect3->width > $rect1->width);
