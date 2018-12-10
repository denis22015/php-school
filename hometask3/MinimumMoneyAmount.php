<?php

$MONEY = [500, 200, 100, 50, 20, 10, 5, 2, 1];

function getMoney($sum, $moneyLvl = 0) {
    global $MONEY;

    if ($moneyLvl >= count($MONEY)) {
        return null;
    }

    $numOfNotes = floor($sum / $MONEY[$moneyLvl]);

    if ($numOfNotes == 0) {
        return getMoney($sum, $moneyLvl + 1);
    }

    $moneyLeft = $sum - $MONEY[$moneyLvl] * $numOfNotes;

    return $MONEY[$moneyLvl] . ': ' . $numOfNotes . PHP_EOL . getMoney($moneyLeft, $moneyLvl + 1);
};

$input = +$argv[1];

if ($input <= 100000) {
    echo 'Input: ' . $input . PHP_EOL . 'Result:' . PHP_EOL;
    echo getMoney($input);
} else {
    echo 'Maximum value, that you could provide - 100 000 UAH';
}
