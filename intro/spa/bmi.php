<?php

header("Access-Control-Allow-Origin: *");
header('Content-Type: application/json');

$height = $_POST['height'];
$weight = $_POST['weight'];

$bmi = $weight / $height ** 2;
$category = 'underweight';
if ($bmi > 18.5) $category = 'normal';
if ($bmi > 25) $category = 'overweight';

$data = [
  'height' => $height,
  'weight' => $weight,
  'bmi' => $bmi,
  'category' => $category,
];
echo json_encode($data);
