<?php

header("Access-Control-Allow-Origin: *");
header('Content-Type: application/json');

$a = $_POST['a'];
$b = $_POST['b'];
$c = $_POST['c'];

$data = ['sum' => $a + $b + $c];
echo json_encode($data);
