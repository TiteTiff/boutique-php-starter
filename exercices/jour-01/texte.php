<?php
$brand = "Nike";
$model = "Air Max";

echo "Chaussures $brand $model";
?>
<br />
<?php
echo 'Chaussures ' . $brand . ' ' . $model;
?>
<br />
<?php
echo sprintf("Chaussures %s %s", $brand, $model);
