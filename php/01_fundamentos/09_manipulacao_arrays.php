<?php

$cart = ['Arroz', 'Feijão', 'Sabão', 'Balinhas'];
var_dump($cart);

array_pop($cart);
var_dump($cart);

array_shift($cart);
var_dump($cart);

unset($cart[1]);
var_dump($cart);

echo '<hr>';

array_push($cart, 'Desodorante');
var_dump($cart);

array_unshift($cart, 'Carne');
array_unshift($cart, 'Desodorante');
var_dump($cart);

echo '<hr>';

$cart = array_unique($cart);
var_dump($cart);