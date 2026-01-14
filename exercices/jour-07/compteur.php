<?php
//démarrer une session
session_start();

//php pour remettre le compteur à 0
if (isset($_GET["reset"])) {
    $_SESSION["visits"] = 0;
}

//incrémenter le compteur
if (!isset($_SESSION["visits"])) {
    $_SESSION["visits"] = 1;
} else {
    $_SESSION["visits"]++;
}

//lien qui remet le compteur à 0
?>
<a href="compteur.php?reset=1">Réinitaliser</a>
<a href="compteur.php">Rafraichir</a>
<p> Vous avez visité cette page <?= $_SESSION["visits"]?> fois </p>
<?php


/*Que se passe-t-il si tu ouvres la page dans un autre navigateur ? Le compteur est remis à 0.
Que se passe-t-il si tu fermes et rouvres ton navigateur ? Le compteur reprends le nombre de visites affichées avant de se fermer.
*/
