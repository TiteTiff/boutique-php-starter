<?php
$name = "T-shirt";
$price = 19.99;
$stock = 20;
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title><?= $name ?></title>
</head>

<body>
    <h1><?= $name ?></h1>
    <p><?= $price ?></p>
    <span><?php
            if ($stock > 0) {
                echo "En stock";
            } else {
                echo "En rupture de stock";
            }
            ?></span>
</body>

</html>