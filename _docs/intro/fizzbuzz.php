<?php

// for every number from 0 to n, print...
//   - "Fizz" if the number is divisble by 3
//   - "Buzz" if the number is divisble by 5
//   - "FizzBuzz" if the number is divisble by 3 and 5
//   - or the number as is otherwise

function fizzbuzz(int $n) {
  for ($i = 0; $i <= $n; $i++) {
    echo "$i: ";
    if ($i % 15 === 0) echo "FizzBuzz\n";
    else if ($i % 3 === 0) echo "Fizz\n";
    else if ($i % 5 === 0) echo "Buzz\n";
    else echo "$i\n";
  }
}

fizzbuzz(15);
