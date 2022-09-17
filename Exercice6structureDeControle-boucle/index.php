<?php

$number = mt_rand(0, 100);

for ($x = 0; $x < 101; $x++) {
    echo $x . "*" . $number . "=" . $x * $number . "<br />";
}


for ($x = 0; $x < 101; $x++) {
    $red = "";
    if ($x % 2 != 0) {
        $red = "red";
    }
    echo "<p style='color:$red'>" . $x . "*" . $number . "=" . $x * $number . "</p>";
}