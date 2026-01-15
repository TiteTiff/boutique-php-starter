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
    echo "✅ Connexion réussie !";
} catch (PDOException $e) {
    echo "❌ Erreur : " . $e->getMessage();
}


$stmt = $pdo->prepare("SELECT * FROM products");
$stmt->execute();
$products = $stmt->fetchall(PDO::FETCH_ASSOC);

//var_dump($products);


//Quelle différence entre fetch() et fetchAll() ? Fetch() ne récupère que la prochaine ligne de la BDD alors que fetchAll() récupère toutes les lignes restantes.
//Que signifie PDO::FETCH_ASSOC ? Cela dit à PDO de retourner le résultat en tant que tableau.
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table>
        <?php foreach ($products as $product): ?>
            <tr>
                <td><?= $product["name"] ?></td>
                <td><?= $product["price"] ?></td>
                <td><?= $product["stock"] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>