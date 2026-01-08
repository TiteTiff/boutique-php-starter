<?php
$a = 0;
$b = "";
$c = null;
$d = false;
$e = "0";

// Compare $a avec $b, $c, $d, $e en utilisant == puis ===
// Utilise var_dump() pour chaque comparaison

var_dump($a == $b);
var_dump($a === $b);
var_dump($a == $c);
var_dump($a === $c);
var_dump($a == $d);
var_dump($a === $d);
var_dump($a == $e);
var_dump($a === $e);

// == donne un résultation inattendu quand les types de données comparées ne sont pas les mêmes par ex: 0 et "0" ne devraient 
// pas être identiques mais la comparaison == ne prend pas en compte le type de variable.
