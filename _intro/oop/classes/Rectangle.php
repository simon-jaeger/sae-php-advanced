<?php

class Rectangle {
  public int $width;
  public int $height;

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

  static function makeSquare(int $size) {
    $rectangle = new Rectangle();
    $rectangle->width = $size;
    $rectangle->height = $size;
    return $rectangle;
  }
}
