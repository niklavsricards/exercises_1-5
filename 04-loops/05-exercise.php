<?php

$person1 = new stdClass();
$person1->name = "John";
$person1->surname = "Doe";
$person1->age = 50;
$person1->birthday = "5th of July";

$person2 = new stdClass();
$person2->name = "Jane";
$person2->surname = "Doe";
$person2->age = 41;
$person2->birthday = "15th of August";

$persons = [
    1 => $person1,
    2 => $person2,
];

/*foreach ($persons as $person) {
    foreach ($person as $key => $value) {
        echo $key.' : '.$value."\n";
    }
    echo "\n";
}*/

foreach ($persons as $person) {
    var_dump($person);
}