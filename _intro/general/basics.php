<?php

$number = 42;
$string = 'lorem ipsum';
$boolean = false;

$array = [0, 1, 2];
array_push($array, 3); // add element
print($array[0]); // print element at index 0

$age = 20;
if ($age >= 18) {
  print("you can buy vodka.\n");
} else {
  print("no vodka for you!\n");
}

// count from 0 to 9
for ($i = 0; $i < 9; $i++) {
  print($i . "\n");
}

function sum($a, $b) {
  return $a + $b;
}

$result = sum(2, 3); // $result will be 5
