<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

$user=[
    "name" => "Spider-man",
    "age" => 21,
    "city" => "New York",
    "job" => "Superhero"
];

foreach($user as $key => $value) {
    echo "<strong>" . $key . "</strong>: " . $value . "<br />";
}

?>














