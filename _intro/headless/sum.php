<?php

header("Access-Control-Allow-Origin: *");
header('Content-Type: application/json');

$json = file_get_contents('php://input'); // {"a": 2, "b:': 4 }
$data = json_decode($json, true); // [ "a" => 2, "b" => 4]
$a = $data['a']; // 2
$b = $data['b']; // 4

$sum = $a + $b;

$data = ['sum' => $sum];
echo json_encode($data);
