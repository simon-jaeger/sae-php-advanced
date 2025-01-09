<?php

// use php to count from 0 to 100
for ($i = 0; $i <= 100; $i++) {
  print($i . "\n");
}

// use php to count down from 100 to 0 and skip uneven numbers
for ($i = 10; $i >= 0; $i--) {
  if ($i % 2 !== 0) continue;
  print($i . "\n");
}
