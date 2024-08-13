<?php

namespace App\Classes;

class Rectangle {
  public int $width;
  public int $height;

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
