<?php

try {
    $pdo = new PDO(
        "mysql:host=localhost;dbname=boutique;charset=utf8mb4",
        "dev",
        "dev",
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );
} catch (PDOException $e) {
    echo "❌ Erreur : " . $e->getMessage();
}

// SELECT avec paramètre
$search = $_GET["recherche"] ?? "";
$products = [];
if ($search !== "") {
    $stmt = $pdo->prepare("SELECT * FROM products WHERE name LIKE ?");
    $stmt->execute(['%' . $search . '%']);
    $products = $stmt->fetchall(PDO::FETCH_ASSOC);
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
    <form action="" method="GET">
        <label for="Recherche">Recherche </label><br />
        <input name="recherche" autofocus required="true" />
        <button type="submit">Rechercher</button>
    </form>
    <?php foreach ($products as $product): ?>
        <?= $product["name"] ?>
    <?php endforeach; ?>
</body>

</html>