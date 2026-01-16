<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

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

$stmt = $pdo->prepare("SELECT * FROM products");
$stmt->execute();
$products = $stmt->fetchall(PDO::FETCH_ASSOC);

// CREATE avec INSERT INTO
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["action"]) && $_POST["action"] === "add") {
    $stmt = $pdo->prepare("INSERT INTO products (name, price, stock) VALUES (?, ?, ?)");
    $stmt->execute([$_POST["name"], $_POST["price"], $_POST["stock"]]);
    header("Location: admin-produits.php");
    exit;
}

// DELETE
if (isset($_GET["delete"])) {
    $stmt = $pdo->prepare("DELETE FROM products WHERE id = ?");
    $stmt->execute([$_GET["delete"]]);
    header("Location: admin-produits.php");
    exit;
}

//UPDATE/MODIFIER
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["action"]) && $_POST["action"] === "modifier") {
    $stmt = $pdo->prepare("UPDATE products SET name= ?, price= ?, stock = ? WHERE id= ?");
    $stmt->execute([$_POST["name"], $_POST["price"], $_POST["stock"], $_POST["id"]]);
    header("Location: admin-produits.php");
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

    <?php foreach ($products as $product): ?>
        <h1>
            <?= $product["name"] ?></h1>
        <?= $product["stock"] ?>
        <?= $product["price"] ?>
        <p></p>
        <form method="POST">
            <label for="name">Nom du produit </label>
            <input name="name" autofocus required="true" value="<?= $product["name"] ?>" />
            <label for="price">Prix du produit </label>
            <input name="price" autofocus required="true" value="<?= $product["price"] ?>" />
            <label for="stock">Stock du produit </label>
            <input name="stock" autofocus required="true" value="<?= $product["stock"] ?>" />
            <input hidden name="id" autofocus required="true" value="<?= $product["id"] ?>" />
            <input hidden name="action" value="modifier" />
            <button type="submit">Modifier</button>
        </form>
        <button onclick="window.confirm('Souhaitez-vous vraiment supprimer ?')
        ? location.href = 'http://localhost:8000/admin-produits.php?delete= <?= $product["id"] ?>'
        : alert('Annuler?');">Supprimer</button>
        <p></p>
    <?php endforeach; ?>


    <p></p>
</body>
<footer>
    <form action="admin-produits.php" method="POST">
        <label for="Ajouter des produits">
            <h1>Ajouter des produits</h1>
        </label><br />
        <label for="name">Nom du produit </label>
        <input name="name" autofocus required="true" />
        <label for="price">Prix du produit </label>
        <input name="price" autofocus required="true" />
        <label for="stock">Stock du produit </label>
        <input name="stock" autofocus required="true" />
        <input hidden name="action" value="add" />
        <button type="submit">Ajouter</button>
    </form>
</footer>

</html>