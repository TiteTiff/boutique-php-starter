<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

$categories = ["Vêtements", "Chaussures", "Accessoires", "Sport"];

if (in_array("Chaussures", $categories)) {
    echo "Trouvé";
} else {
    echo "Non trouvé";
}

if (in_array("Électronique", $categories)) {
    echo "Trouvé";
} else {
    echo "Non trouvé";
}

echo (array_search("Sport", $categories, true));
