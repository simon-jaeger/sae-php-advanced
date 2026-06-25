<?php

// use php to count from 0 to 10
for ($i = 0; $i <= 10; $i++) {
  print($i . ","); // 0 - 10
}

// use php to count down from 10 to 0 and skip uneven numbers
for ($i = 10; $i >= 0; $i--) {
  if ($i % 2 !== 0) continue;
  print($i . ",");  // 10, 8, 6, 4, 2, 0
}
