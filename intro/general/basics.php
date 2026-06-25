<?php
$int = 42;
$float = 3.14;
$string = 'lorem ipsum';
$boolean = false;
$nothing = null;

$array = ['zero', 'one', 'two'];
print($array[2]); // two

$dictionary = [
  'first_name' => 'john',
  'last_name' => 'doe',
];
print($dictionary['first_name'] . " " . $dictionary['last_name']); // john doe

for ($i = 0; $i < 9; $i++) {
  print($i); // 0 - 8
}

function sum($a, $b) {
  return $a + $b;
}
$result = sum(25, 75);
print($result); // 100
