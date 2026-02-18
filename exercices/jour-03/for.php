<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

for($i = 1; $i <= 10; $i++){
    echo $i, " ";
}
?>
<p>
<?php
for($i = 1; $i <= 10; $i++){
    echo $i * 2, " ";
}
?>
<p>
<?php
for($i = 10; $i >= 0; $i--){
    echo $i, " ";
}
?>
<br>
<?php
for($i = 1; $i <= 10; $i++){
    echo "7 * ". $i . "=" . ($i * 7), "   ";
}
