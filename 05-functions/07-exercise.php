<?php

$person = new stdClass();
$person->name = 'Jānis';
$person->licenses = ['P'];
$person->cash = 1000;

$pistol = new stdClass();
$pistol->license_letter = 'P';
$pistol->price = 120;
$pistol->name = 'Glock';

$ak47 = new stdClass();
$ak47->license_letter = 'H';
$ak47->price = 500;
$ak47->name = 'AK-47';

$shotgun = new stdClass();
$shotgun->license_letter = 'H';
$shotgun->price = 250;
$shotgun->name = 'Shotgun';

$weapons = [
    $pistol,
    $ak47,
    $shotgun
];

foreach ($weapons as $key => $weapon) {
    echo "{$key} | {$weapon->name} ({$weapon->price}$) {$weapon->license_letter}" . PHP_EOL;
}

$selection = (int) readline('Enter Selection: ');

if (!isset($weapons[$selection])) {
    echo "Invalid selection";
    exit;
}

$selectedWeapon = $weapons[$selection];

if (!in_array($selectedWeapon->license_letter, $person->licenses) || $person->cash < $selectedWeapon->price) {
    echo "Person cannot purchase this weapon";
    exit;
}

echo "Person can purchase {$selectedWeapon->name}";


//2