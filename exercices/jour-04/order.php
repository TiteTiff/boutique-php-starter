<?php

/*$status = "shipped";

//SWITCH
switch ($status) {
    case "standby":
        echo "Commande en attente de validation";
        break;
    case "validated":
        echo "Commande validée";
        break;
    case "shipped";
        echo "Commande expédiée";
        break;
    case "delivered";
        echo "Commande livrée";
        break;
    case "canceled";
        echo "Commande annulée";
        break;
}
*/

//MATCH

$status = "delivered";
$returnstatus = match ($status) {
    "standby" => "Commande en attente de validation",
    "validated" => "Commande validée",
    "shipped" => "Commande expédiée",
    "delivered" => "Commande livrée",
    "canceled" => "Commande annulée"
}

?>

<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <span style="color: green"> <?= $returnstatus ?></span>

</body>

</html>