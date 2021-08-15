<?php

$fruits = [
    0 => [
        'name' => 'apple',
        'weight' => 130
    ],
    1 => [
        'name' => 'banana',
        'weight' => 100
    ],
    2 => [
        'name' => 'orange',
        'weight' => 250
    ],
    3 => [
        'name' => 'watermelon',
        'weight' => 5300
    ],
    4 => [
        'name' => 'mega watermelon',
        'weight' => 13000
    ]
];

$shipping = [
    0 => [
        'weight' => 10000,
        'cost' => 2
    ],
    1 => [
        'weight' => 0,
        'cost' => 1
    ]
];

function checkWeight(array $fruit): bool {
    return $fruit['weight'] > 10000;
}

foreach ($fruits as $fruit) {
    if (checkWeight($fruit)) {
        echo "{$fruit['name']} weights more than 10kg"."\n";
    } else {
        echo "{$fruit['name']} weights less than 10kg"."\n";
    }
}

echo PHP_EOL;

function productData(array $fruit, array $shipping): bool {
    return $fruit['weight'] >= $shipping[0]['weight'];
}

foreach ($fruits as $fruit) {
    if (productData($fruit, $shipping)) {
        echo "Fruit is ".$fruit['name']." and it costs ".$shipping[0]['cost']." euro to ship this product"."\n";
    } else {
        echo "Fruit is ".$fruit['name']." and it costs ".$shipping[1]['cost']." euro to ship this product"."\n";
    }
}


