<?php
$stock = 2;
$active = true;
$promoEndDate = "2026-10-31";

if ($stock > 0 && $active = true) {
    echo "The product is available";
} else echo "The product isn't available";

if (strtotime($promoEndDate) > strtotime("now")) {
    echo "The product is on sale";
} else echo "The product isn't on sale";
