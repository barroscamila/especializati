<?php

$cart = [
    0 => 'Marracão', 
    1 => 'Arroz', 
    2 => 'Feijão', 
    3 => 'Batata'
];

arsort($cart);
var_dump($cart);

echo '<hr>';

asort($cart);
var_dump($cart);

echo '<hr>';

sort($cart);
var_dump($cart);