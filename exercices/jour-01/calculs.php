<?php
$priceExcludingTax = 100;
$vat = 20;
$quantity = 3;

//calculer et afficher: le montant de la TVA, le prix TTC unitaire et le total pour la quantité commandée
$tva = 0.20;
$totalTTC = $priceExcludingTax + $tva;
echo "Le montant de la TVA est : $tva <br/>";
echo "Le total TTC est : $totalTTC <br/>";
echo "Le total TTC de la commande est :" . $totalTTC * $quantity;
