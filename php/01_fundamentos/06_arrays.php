<?php

// $carros = array(1, 2, 3, 4); --> Forma mais antiga de declarar um array

// $carros = ['Uno', 'Gol', 'Fusion', 'Civic'];
// var_dump($carros);


// -> ARRAYS COMPOSTOS

/*
$car = [
    'cor' => 'Branco',
    'portas' => '4',
    'ano' => 2021
];

echo $car['ano'];
print '<br>';
print_r($car['cor']);
print '<br>';

$car['airbag'] = true;
$car['som'] = 'Model 709';
$car['ano'] = 2023;
print_r($car);
*/

// -> ARRAYS MULTIDIMENSIONAIS

$car = [
    'Mercedes' => [
        'color' => 'Black',
        'motor' => 5.2,
        'name' => 'Mercedes-Benz Sprinter'
    ],
    'Ford' => [
        'color' => 'Red',
        'motor' => 4.5,
        'name' => 'Ford Maverick'
    ],
    'Ferrari' => [
        'color' => 'Yellow',
        'motor' => 6.0,
        'name' => 'Ferrari Roma'
    ]
];

print_r($car['Mercedes']['name']);
print_r($car['Ferrari']['color']);
print_r($car['Ford']['motor']);