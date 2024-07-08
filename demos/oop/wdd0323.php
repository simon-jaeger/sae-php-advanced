<?php

function display($value) {
  print(json_encode($value, JSON_PRETTY_PRINT) . PHP_EOL);
}

class Color {
  static function random() {
    return '#' . str_pad(dechex(mt_rand(0, 0xffffff)), 6, '0', 0);
  }

  static function fromRgb($r, $g, $b) {
    return sprintf("#%02x%02x%02x", $r, $g, $b);

    // more verbose alternative:
    // $red = str_pad(dechex($r), 2, '0', 0);
    // $green = str_pad(dechex($g), 2, '0', 0);
    // $blue = str_pad(dechex($b), 2, '0', 0);
    // return '#' . $red . $green . $blue;
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
    // return sprintf("#%02x%02x%02x", 0xff - $red, 0xff - $green, 0xff - $blue);
    return self::fromRgb(0xff - $red, 0xff - $green, 0xff - $blue);

    // more verbose alternative:
    // $red = str_pad(dechex(0xff - $red), 2, '0', 0);
    // $green = str_pad(dechex(0xff - $green), 2, '0', 0);
    // $blue = str_pad(dechex(0xff - $blue), 2, '0', 0);
    // return '#' . $red . $green . $blue;
  }
}

// display(Color::random()); // random hex color, e.g.: "#633314"
// display(Color::fromRgb(0, 255, 128)); // "#00ff80"
// display(Color::isGray('#ff0000')); // false
// display(Color::isGray('#888888')); // true
display(Color::invert('#00bbff')); // "#ff4400"
