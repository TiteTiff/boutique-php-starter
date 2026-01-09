<?php
$vat = 20;
$discount = 10;

function calculateVAT($priceExcludingTax, $rate)
{
    $vat = ($priceExcludingTax / ($rate + 100)) * $rate;
    return $vat;
}

function calculateIncludingTax($priceExcludingTax, $rate)
{
    $price = $priceExcludingTax * (1 + $rate / 100);
    return $price;
}

function calculateDiscount($price, $percentage)
{
    $discount = $price - ($price * $percentage / 100);
    return $discount;
}

echo "La TVA est de ", $vat;
echo "Le prix TTC est ", (calculateIncludingTax(100, 20));
echo "Le prix remisé est de ", (calculateDiscount(120, 10));
echo "La remise est de ", $discount = (120 * 10) / 100;
echo "Le prix final est de ", (calculateDiscount(120, 10));
