<?php

session_start();


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"] ?? "";
    $password = $_POST["password"] ?? "";
    if ($username === "admin" && $password === "1234") {
        $_SESSION["user"] = $username;
        header("Location: dashboard.php");
        exit;
    }
}

//Warning: Undefined variable $username: erreur du au fait que pas de vérif de valeur avec ?? "", spécifique à cette variable à cause du tableau.
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post">
        <label for="username">Username* </label><br />
        <input name="username" autofocus required="true" /><br />

        <label for="password">Password*</label><br />
        <input type="password" name="password" autofocus required="true"></=><br />

        <p><small>* Required fields</small></p>

        <button type="submit">Se connecter</button>
    </form>
</body>

</html>