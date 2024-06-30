<?php

function display($value) {
  print(json_encode($value, JSON_PRETTY_PRINT) . PHP_EOL);
}

////////////////////////////////////////////////////////////////////////////////

class Circle {
  public int $radius;

  function __construct($radius) {
    $this->radius = $radius;
  }

  function circumference() {
    return 2 * pi() * $this->radius;
  }

  function area() {
    return pi() * $this->radius ** 2;
  }
}

// $circle = new Circle(4);
// display($circle);
// display($circle->circumference());
// display($circle->area());

////////////////////////////////////////////////////////////////////////////////

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

// $rectangle = new Rectangle(5, 10);
// display($rectangle);
// display($rectangle->circumference());
// display($rectangle->area());
// display($rectangle->diagonal());
// display($rectangle->isSquare());

////////////////////////////////////////////////////////////////////////////////

class Coin {
  public bool $isHeads = false;

  function flip() {
    $this->isHeads = rand(0, 1) < 0.5;
  }
}

// $coin = new Coin();
// for ($i = 0; $i < 10; $i++) {
//   $coin->flip();
//   display($coin->isHeads);
// }

////////////////////////////////////////////////////////////////////////////////

class Dice {
  public int $value = 1;
  public int $max;

  function __construct($max = 6) {
    $this->max = $max;
  }

  function roll() {
    $this->value = random_int(1, $this->max);
  }
}

// $dice = new Dice(20);
// for ($i = 0; $i < 10; $i++) {
//   $dice->roll();
//   display($dice->value);
// }

////////////////////////////////////////////////////////////////////////////////

class Task {
  static $all = [];

  static function make($text) {
    $task = new self();
    $task->text = $text;
    array_push(self::$all, $task);
    $task->created_at = date("Y-m-d H:i:s");
    return $task;
  }

  public string $text;
  public bool $done = false;
  public string $created_at;
}

// $task1 = Task::make('learn php');
// $task2 = Task::make('learn oop');
// $task3 = Task::make('learn laravel');
// display(Task::$all);

////////////////////////////////////////////////////////////////////////////////

class Color {
  static function random() {
    return '#' . str_pad(dechex(mt_rand(0, 0xffffff)), 6, '0', 0);
  }

  static function fromRgb($r, $g, $b) {
    $t = fn($x) => str_pad(dechex($x), 2, '0', 0);
    return '#' . $t($r) . $t($g) . $t($b);
  }

  static function isGray(string $color) {
    $red = substr($color, 1, 2);
    $green = substr($color, 3, 2);
    $blue = substr($color, 5, 2);
    return $red === $blue && $blue === $green;
  }

  // invert('#00bbff')
  static function invert(string $color) {
    $red = hexdec(substr($color, 1, 2)); // '00' --> 0xff
    $green = hexdec(substr($color, 3, 2)); // 'bb' --> 0x44
    $blue = hexdec(substr($color, 5, 2));// 'ff' --> 0x00
    $t = fn($x) => str_pad(dechex(0xff - $x), 2, '0', 0);
    return '#' . $t($red) . $t($green) . $t($blue);
  }
}

// display(Color::random());
// display(Color::fromRgb(0, 255, 128));
// display(Color::isGray('#ff0000'));
// display(Color::isGray('#888888'));
// display(Color::invert('#00bbff'));
