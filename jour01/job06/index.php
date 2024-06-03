<?php

for ($i = 0; $i <= 100; $i++) {
    if ($i == 42) {
        echo "La Plateforme_"; 
    } elseif ($i >= 25 && $i <= 50) {
        echo "<u>$i</u>";
    } elseif ($i >= 0 && $i <= 20) {
        echo "<i>$i</i>";
    } else {
    echo $i;
    }
    echo "<br>";
}


?>