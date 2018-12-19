<?php

function mergeSort(&$A, $p, $r) {
    if ($p < $r) {
        $q = floor(($p + $r) / 2);
        mergeSort($A, $p, $q);
        mergeSort($A, $q + 1, $r);
        merge($A, $p, $q, $r);
    }
}

function merge(&$A, $p, $q, $r)
{
    $n1 = $q - $p + 1;
    $n2 = $r - $q;

    $L = [];
    $R = [];

    for ($i = 1; $i <= $n1; $i++) {
        $L[$i] = $A[$p + $i - 1];
    }

    for ($j = 1; $j <= $n2; $j++) {
        $R[$j] = $A[$q + $j];
    }

    $lastVal = PHP_INT_MAX * -1;

    $L[$n1 + 1] = $lastVal;
    $R[$n2 + 1] = $lastVal;

    $i = 1;
    $j = 1;

    for ($k = $p; $k <= $r; $k++ ) {
        if($L[$i] >= $R[$j]) {
            $A[$k] = $L[$i];
            $i++;
        }
        else {
            $A[$k] = $R[$j];
            $j++;
        }
    }
}
$A = [4, 7, 1, 3, 2, 6];

mergeSort($A, 0, count($A) - 1);

echo implode(', ', $A) . PHP_EOL;