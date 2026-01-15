<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

$product = [
    "name" => "T-shirt",
    "description" => "T-shirt en coton haute qualité",
    "price" => 29.99,
    "stock" => 25,
    "category" => "Top",
    "brand" => "Nike",
    "date added" => date("d.m.y"),
];

$product["price"] = 29.99 * 0.90;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?= $product["name"] ?><br />
    <?= $product["description"] ?><br />
    <?= $product["price"] ?><br />
    <?= $product["stock"] ?><br />
    <?= $product["category"] ?><br />
    <?= $product["brand"] ?><br />
    <?= $product["date added"] ?><br />
</body>

</html>