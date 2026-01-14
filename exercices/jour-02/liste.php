<?php
error_reporting(E_ALL);

$groceries = ["bananes", "céréales", "dentifrice", "pomme", "yaourts"];

echo $groceries[0]; //affiche le premier article

echo ($groceries[count($groceries) - 1]); //affiche le dernier article avec count

echo count($groceries); //affiche le nombre total d'articles

array_push($groceries, "savon", "amandes");

unset($groceries[2]);

?>
<br />
<?php
var_dump($groceries);
