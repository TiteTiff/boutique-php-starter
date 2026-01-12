<?php
$name = $_GET["name"];
$age = $_GET["age"];

if ($_GET["name"] . $_GET["age"]) {
    echo "Bonjour " . htmlspecialchars($_GET["name"]) . " vous avez " . htmlspecialchars($_GET["age"]) . " ans" . "!";
} else {
    echo "Bonjour visiteur!";
}
