<?php

header("Access-Control-Allow-Origin: *");
header('Content-Type: application/json');

$a = $_POST['a'];
$b = $_POST['b'];

$data = ['sum' => $a + $b];
echo json_encode($data);

