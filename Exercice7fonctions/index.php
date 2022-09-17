<?php


function division($x, $y)
{
    if ($y == 0) {
        echo "On ne divise pas par zéro <br />";
        $score = 0;
    } elseif ($y != 0) {
        $score = $x / $y;
    }
    return round($score, 2);
}

$nombre1 = mt_rand(0, 10);
$nombre2 = mt_rand(0, 10);

echo "si nombre " . $nombre1 . " diviser par un nombre " . $nombre2 . " alors le résultat sera " . division($nombre1, $nombre2);