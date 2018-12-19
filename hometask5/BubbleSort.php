<?php

function bubbleSort(&$a) {
  $arrLen = count($a);

  for($i = 0; $i < $arrLen - 2; $i++) {
    for($j = $arrLen - 1; $j >= $i + 1; $j--) {
      if ($a[$j] < $a[$j - 1]) {
          $temp = $a[$j];
          $a[$j] = $a[$j - 1];
          $a[$j - 1] = $temp;
      }
    }
  }
};

$array = [4,5,6,3,1,3,42,2,1];
bubbleSort($array);
echo implode(',', $array) . PHP_EOL;