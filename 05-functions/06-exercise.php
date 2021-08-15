<?php

$array = [1, 2, 3, 1.01, 'string'];
$count = 0;

for ($i = 0; $i < sizeof($array); $i++) {
    $count = $count + 1;
}

echo $count.PHP_EOL;

for ($i = 0; $i < sizeof($array); $i++) {
    if (gettype($array[$i]) == "integer") {
        $array[$i] = $array[$i] * 2;
    }
}

print_r($array);

function printDoubledIntegers(array $array): void {
    for ($i = 0; $i < sizeof($array); $i++) {
        if (gettype($array[$i]) == "integer") {
            echo $array[$i];
        }
    }
}

printDoubledIntegers($array);

