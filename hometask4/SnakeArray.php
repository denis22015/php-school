<?php

$inputSize = +$argv[1];

$directionDown = true;
$couner = 1;
$array = [];

for($i = 0; $i < $inputSize; $i++) {
    for($j = 0; $j < $inputSize; $j++) {
        $newIndex = $directionDown ? $j : $inputSize - 1 - $j;

        $array[$newIndex][$i] = $couner;
        $couner++;
    }

    $directionDown = !$directionDown;
}

// output
for($i = 0; $i < $inputSize; $i++) {
    for($j = 0; $j < $inputSize; $j++) {
        echo $array[$i][$j] . ' ';
    }
    echo PHP_EOL;
}