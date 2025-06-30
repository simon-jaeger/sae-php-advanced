<?php

// start with:
// php -S localhost:8000

// call with:
// curl http://localhost:8000/hello-world.php

header("Access-Control-Allow-Origin: *"); // allows cors
header("Content-Type: application/json"); // send json, not html

$data = [
  'msg' => 'hello world ' . random_int(1, 99),
];
echo json_encode($data);
