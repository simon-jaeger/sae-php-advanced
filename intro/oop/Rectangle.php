<?php

//class Rectangle {
//  public float $width;
//  public float $height;
//
//  function __construct($width, $height) {
//    $this->width = $width;
//    $this->height = $height;
//  }
//
//  function circumference() {
//    return 2 * ($this->width + $this->height);
//  }
//
//  function area() {
//    return $this->width * $this->height;
//  }
//
//  function diagonal() {
//    return hypot($this->width, $this->height);
//  }
//
//  function isSquare() {
//    return $this->width === $this->height;
//  }
//
//  // named constructor
//  static function makeSquare($size) {
//    return new Rectangle($size, $size);
//  }
//
//  // shared utility methods
//  static function largest(Rectangle $a, Rectangle $b) {
//    $areaA = $a->area();
//    $areaB = $b->area();
//    if ($areaA > $areaB) return $a;
//    else return $b;
//  }
//}
//
//$rect = new Rectangle(3, 4);
//print($rect->circumference()); // 14
//if ($rect->isSquare()) print('yes');
//else print('no'); // no
//
//$square = Rectangle::makeSquare(5);
//
//print_r(Rectangle::largest($rect, $square)); // $square
