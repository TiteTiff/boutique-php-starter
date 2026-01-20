<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

class Product
{

    function __construct(public string $name, public string $description, public float $price, public int $stock, public string $category) {}
}

$catalogue = [
    new Product("T-shirt", "T-shirt en coton bio", 29.99, 15, "Tops"),
    new Product("Dress", "Dress with v-neck", 49.99, 20, "dresses"),
    new Product("Jean", "Stretch jean", 39.99, 25, "Jeans")
];

foreach ($catalogue as $product) {
    echo $product->name . ", $" . $product->price . ". " . $product->description . ". Il reste " . $product->stock . " articles en stock. " . $product->category . "<br>";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p><?= "Le stock total comporte " . $stockTotal = $product->stock + $product->stock + $product->stock . " articles." ?></p>
    <p><?= "La valeur totale du catalogue est de " . $valeurTotale = $stockTotal * $product->stock . " $." ?></p>
</body>

</html>