<?php

require './classes/Circle.php';
require './classes/Rectangle.php';
require './classes/Dice.php';

$circle = new Circle(3);
$circle->radius = 6;
var_dump($circle);
var_dump($circle->circumference());
var_dump($circle->area());

$rectangle = new Rectangle(5, 10);
var_dump($rectangle);
var_dump($rectangle->circumference());
var_dump($rectangle->area());
var_dump($rectangle->diagonal());
var_dump($rectangle->isSquare());

$dice = new Dice(6);
$dice->roll();
var_dump($dice->value);
