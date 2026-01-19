<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

class Product
{

    function __construct(public int $id, public string $name, public string $description, public float $price, public int $stock, public string $category) {}

    public function getPriceIncludingTax(float $vat = 20)
    {
        $priceTTC = $this->price * (1 + $vat / 100);
        return $priceTTC;
    }

    public function isInStock()
    {
        if ($this->stock > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function reduceStock(int $quantity)
    {
        if ($quantity < 5) {
            return "Low stock!";
        }
    }

    public function applyDiscount(float $percentage)
    {
        $discount = $this->price - ($this->price * $percentage / 100);
        return $discount;
    }
}

$product = new Product(1, "T-shirt", "T-shirt en coton bio", 29.99, 10, "Tops");




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p><?= $product->getPriceIncludingTax() ?></p>
    <p><?= $product->isInStock() ? "True" : "False" ?></p>
    <p><?= $product->reduceStock(2) ?></p>
    <p><?= $product->applyDiscount(20) ?></p>
</body>

</html>