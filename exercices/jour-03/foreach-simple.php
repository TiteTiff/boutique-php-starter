<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

$firstNames=["Yoann", "Tiffanie", "Maëva", "Alexandra", "Stéphanie"];

$i=1;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php
            foreach($firstNames as $firstName) {
                echo "<li>" . $i . ". " . $firstName . "</li>";
                $i++;
            } 
            ?>
    </ul>
</body>
</html>


