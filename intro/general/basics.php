<?php

$number = 42;
$string = 'lorem ipsum';
$boolean = false;

$array = ['zero', 'one', 'two'];
print($array[2]);
print("\n");

$dictionary = [
  'first_name' => 'john',
  'last_name' => 'doe',
];
print($dictionary['first_name'] . " " . $dictionary['last_name'] . "\n");

$age = 20;
if ($age >= 18) {
  print("you can buy vodka\n");
} else {
  print("no vodka for you\n");
}

for ($i = 0; $i < 9; $i++) {
  print($i . "\n");
}

function sum($a, $b) {
  return $a + $b;
}

$result = sum(25, 75);
print($result . "\n");
