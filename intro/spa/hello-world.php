<?php

header("Access-Control-Allow-Origin: *"); // allows cors
header("Content-Type: application/json"); // send json, not html

$data = [
  'msg' => "hello world " . random_int(1, 99),
];

echo json_encode($data);
