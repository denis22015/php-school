<?php
$i = 6;
$n = $i - 1;

$outputTreePart = function ($step) use ($n) {
    $spaces = str_repeat('  ', $step);
    $stars = str_repeat('* ', $n - $step);
    echo $spaces . $stars . "* ". $stars . $spaces;
    echo PHP_EOL;
};

while ($i--) {
    $outputTreePart($i);
}

$i = 1;
while ($i < $n + 1) {
    $outputTreePart($i);
    $i++;
}