<?php

$items = [
    [
        "name" => "John",
        "surname" => "Doe",
        "age" => 50
    ],
    [
        "name" => "Jane",
        "surname" => "Doe",
        "age" => 41
    ]
];

echo $items[0]['name'].' & '.$items[1]['name'].' '.$items[0]['surname']."'s";
