<?php
$int = 42;
$float = 3.14;
$string = 'lorem ipsum';
$boolean = false;
$nothing = null;

$array = ['zero', 'one', 'two'];
print($array[2]);

$dictionary = [
  'first_name' => 'john',
  'last_name' => 'doe',
];
print($dictionary['first_name'] . " " . $dictionary['last_name']);

for ($i = 0; $i < 9; $i++) {
  print($i . "\n");
}

function sum($a, $b) {
  return $a + $b;
}
$result = sum(25, 75);
print($result);
