<?php

$ages = [12, 14, 19, 80, 28, 74, 54, 16, 20, 37];

// echo $ages[count($ages) - 1];
echo end($ages);

$agesFiltered = array_filter($ages, function ($age) {
    return $age >= 18;
});

var_dump($agesFiltered);

echo '<hr>';

$names = ['Carlos', 'EspecializaTi', 'Company'];

// $names[0] = strtoupper($names[0]);
// $names[1] = strtoupper($names[1]);
// $names[2] = strtoupper($names[2]);

$names = array_map(function ($name) {
    return strtoupper($name);
}, $names);

print_r($names);
