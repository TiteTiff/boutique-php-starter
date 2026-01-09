<?php
function isInStock($stock)
{
    if ($stock > 0) {
        return "true";
    } else {
        return "false";
    }
}

function isOnSale($discount)
{
    if ($discount > 0) {
        return "true";
    } else {
        return "false";
    }
}

function isNew($dateAdded)
{
    $daysSince = (time() - strtotime($dateAdded)) / 86400;;
    if ($daysSince < 30) {
        return "true";
    } else {
        return "false";
    }
}

function canOrder($stock, $quantity)
{
    if ($stock >= $quantity) {
        return "true";
    } else {
        return "false";
    }
}

echo (isInStock(10));
echo (isOnSale(0));
echo (isNew(31));
echo (canOrder(1, 2));
