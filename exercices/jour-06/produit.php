<?php
$products = [
    1 => ["name" => "T-shirt", "price" => 29.99],
    2 => ["name" => "Jean", "price" => 79.99],
    3 => ["name" => "Sweater", "price" => 39.99],
    4 => ["name" => "Dress", "price" => 69.99],
    5 => ["name" => "Jacket", "price" => 89.99],
];

$id = $_GET["id"] ?? null;

if ($id > 0 && $id <= 5) {
    echo $products[$id]["name"];
} else {
    echo "Produit non trouvé";
}
