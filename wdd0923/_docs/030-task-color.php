<?php

function prints($value) {
  print(json_encode($value, JSON_PRETTY_PRINT) . PHP_EOL);
}

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

$task1 = Task::make('learn php');
$task2 = Task::make('learn oop');
$task3 = Task::make('learn laravel');
prints(Task::$all);

////////////////////////////////////////////////////////////////////////////////

class Color {
  const BLACK = '#000000'; // const: static readonly property
  const WHITE = '#ffffff';
  const RED = '#ff0000';
  const GREEN = '#00ff00';
  const BLUE = '#0000ff';

  static function random() {
    return '#' . str_pad(dechex(mt_rand(0, 0xffffff)), 6, '0', STR_PAD_LEFT);
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
    $t = fn($x) => str_pad(dechex(0xff - $x), 2, '0', STR_PAD_LEFT);
    return '#' . $t($red) . $t($green) . $t($blue);
  }
}

prints(Color::random());
prints(Color::BLACK);
prints(Color::isGray('#00ff00'));
prints(Color::invert('#00bbff'));
