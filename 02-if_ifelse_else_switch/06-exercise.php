<?php

$plateNumber = 'GK-913';

switch ($plateNumber) {
    case 'MN-2137':
        echo 'not your car number';
        break;
    case 'GK-913':
        echo 'this is your car number';
        break;
    default:
        echo 'no car matches your plate number';
}