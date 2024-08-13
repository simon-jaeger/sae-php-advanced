<?php

namespace App;

use App\Classes\Console;
use App\Classes\Circle;
use App\Classes\Rectangle;

require __DIR__ . '/../vendor/autoload.php';

$name = Console::ask('what is your name?');
Console::log('hello ' . $name);

$circle = new Circle(4);
Console::log($circle);
Console::log($circle->circumference());
Console::log($circle->area());

$rectangle = new Rectangle(5, 10);
Console::log($rectangle);
Console::log($rectangle->circumference());
Console::log($rectangle->area());
Console::log($rectangle->diagonal());
Console::log($rectangle->isSquare());
