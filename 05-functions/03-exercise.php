<?php

$person = new stdClass();
$person->name = 'Niklavs';
$person->surname = 'Sablis';
$person->age = 21;

function isOldEnough(stdClass $person): string
{
    if ($person->age >= 18) {
        return 'Is old enough';
    } else {
        return 'Is not old enough';
    }
}

echo(isOldEnough($person));
