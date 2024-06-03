<?php

$nbr = 3;
$five = 5;

for ($i = 1; $i <= 100; $i++) {
    if ($i % $nbr == 0 && $i % $five == 0) {
        echo "FizzBuzz";
    } elseif ($i % $nbr == 0) {
        echo "Fizz";
    } elseif ($i % $five == 0) {
        echo "Buzz";
    } else {
    echo $i;
    }
    echo "<br>";
}

?>