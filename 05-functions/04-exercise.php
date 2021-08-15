<?php

$person1 = new stdClass();
$person2 = new stdClass();

$person1->name = 'Niklavs';
$person1->surname = 'Sablis';
$person1->age = 21;

$person2->name = 'Ricards';
$person2->surname = 'Sablis';
$person2->age = 17;

$persons = [
    $person1,
    $person2
];

function isOldEnough($person): bool {
    return $person->age >= 18;
}

foreach ($persons as $person) {
    if (isOldEnough($person)) {
        echo "{$person->name} is an adult"."\n";
    } else {
        echo "{$person->name} is not an adult"."\n";
    }
}