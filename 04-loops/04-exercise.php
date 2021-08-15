<?php

$array = [];
for ($i = 1; $i < 11; $i++) {
    $array[$i] = $i;
}

for ($i = 1; $i < 11; $i++) {
    if ($array[$i] % 3 == 0) {
        echo $array[$i].' ';
    }
}