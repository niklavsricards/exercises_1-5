<?php

$number = rand(1, 150);
echo $number."\n";
switch ($number) {
    case $number <= 50:
        echo 'low';
        break;
    case $number > 50 && $number <= 100:
        echo 'medium';
        break;
    default:
        echo 'high';
}