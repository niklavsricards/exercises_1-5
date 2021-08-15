<?php

$numbers = [];
for ($i = 1; $i < 11; $i++) {
    $numbers[$i] = $i;
}

foreach ($numbers as $number) {
    echo $number." ";
}