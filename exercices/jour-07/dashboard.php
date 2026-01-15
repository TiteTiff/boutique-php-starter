<?php

session_start();

// Vérifier si l'utilisateur est connecté
if (!isset($_SESSION["user"])) {
    header("Location: login.php");
    exit;
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
    <p> Bonjour <?= $_SESSION["user"] ?>!</p>
    <button><a href="logout.php" type="submit">Se déconnecter</a></button>

</body>

</html>