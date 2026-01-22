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

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <article>
        <?php foreach ($products as $product): ?>
            <h3><?= $product["name"] ?></h3>
            <p> <?= $product["price"] ?> € </p>
            <p> <?= $product["stock"] ?> </p>
        <?php endforeach; ?>
    </article>
</body>

</html>