<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

$clothes = ["T-shirt", "Jean", "Pull"];
$accessories = ["Ceinture", "Montre", "Lunettes"];

$catalog = array_merge($clothes, $accessories);

array_unshift($catalog, "Chaussures");

echo (count($catalog));
