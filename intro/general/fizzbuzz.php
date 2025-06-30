<?php

/*
write a function fizzBuzz that, for every number from 0 to n, prints...
- "Fizz" if the number is divisible by 3
- "Buzz" if the number is divisible by 5
- "FizzBuzz" if the number is divisible by 3 and 5
- or the number as is otherwise
 */

function fizzbuzz($n) {
  for ($i = 0; $i <= $n; $i++) {
    if ($i % 3 === 0 && $i % 5 === 0) print("FizzBuzz\n");
    else if ($i % 3 === 0) print("Fizz\n");
    else if ($i % 5 === 0) print("Buzz\n");
    else print("$i\n");
  }
}

fizzbuzz(15);
