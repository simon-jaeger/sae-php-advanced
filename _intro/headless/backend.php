<?php

// start with:
// php -S localhost:8000

header("Access-Control-Allow-Origin: *"); // allow cors
header('Content-Type: application/json'); // send json, not html

$data = ["msg" => 'hello, world! ' . random_int(0, 99)];
echo json_encode($data);
