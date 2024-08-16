<?php

require './classes/Circle.php';
require './classes/Rectangle.php';

// $circle = new Circle();
// $circle->radius = 4;
// var_dump($circle);
// var_dump($circle->circumference());
// var_dump($circle->area());

$rectangle = new Rectangle();
$rectangle->width = 5;
$rectangle->height = 10;
var_dump($rectangle);
var_dump($rectangle->circumference());
var_dump($rectangle->area());
var_dump($rectangle->diagonal());
var_dump($rectangle->isSquare());
