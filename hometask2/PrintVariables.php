<?php

echo '$_SERVER: ' . $_SERVER . PHP_EOL;

foreach ($_SERVER as $key => $value) {
    echo '[' . $key . '] => ' . $value . PHP_EOL;
}

