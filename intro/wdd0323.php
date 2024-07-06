<?php

function display($value) {
  print(json_encode($value, JSON_PRETTY_PRINT) . PHP_EOL);
}

display(['string', 123, true]);

////////////////////////////////////////////////////////////////////////////////
 
