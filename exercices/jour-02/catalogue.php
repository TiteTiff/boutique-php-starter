<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

$products = [
    ["name" => "T-shirt", "price" => 29.99, "stock" => 10],
    ["name" => "Dress", "price" => 49.99, "stock" => 5],
    ["name" => "HP", "price" => 699, "stock" => 2],
    ["name" => "Acer", "price" => 799, "stock" => 3],
    ["name" => "Pomme", "price" => 1, "stock" => 100]
];

echo $products[2]["name"] . "<br />";
echo $products[0]["price"] . "<br />";
echo $products[4]["stock"] . "<br />";
