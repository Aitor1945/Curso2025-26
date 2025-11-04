<?php

$setsA = 0;
$setsB = 0;
$sets = [];

while ($setsA < 2 && $setsB < 2) {
    $ganador = rand(0, 1); 
    $x = rand(0, 4);
    if ($ganador === 0) {
        $sets[] = "6-$x";
        $setsA++;
    } else {
        $sets[] = "$x-6";
        $setsB++;
    }
}

$marcador = implode(", ", $sets);

echo $marcador;