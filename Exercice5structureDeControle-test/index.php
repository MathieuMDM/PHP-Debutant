<?php

$number = mt_rand(0, 24);
echo "Il est " . $number . "h<br />";
if ($number > 12) {
        echo "matin";
} elseif ($number <= 12) {
        echo "apres midi";
}
?>