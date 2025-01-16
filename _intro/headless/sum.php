<?php

header("Access-Control-Allow-Origin: *");
header('Content-Type: application/json');

$json = file_get_contents('php://input');
$data = json_decode($json, true);
$a = $data['a'];
$b = $data['b'];

$data = ['sum' => $a + $b];
echo json_encode($data);
