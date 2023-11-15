<?php


function pt(String $value)
{
    echo "{$value} <br>";
}

// $teste = 123;
// pt($teste);
// pt(321);
// pt('Algo');

function sum(int $n1, int $n2): int
{
    return $n1 + $n2;
}

// echo sum(1, 1);

function sumTwo(int $n1, int $n2, int $rate = 12): int
{
    return ($n1 + $n2) * $rate;
}

// echo sumTwo(2, 2, 4);
echo sumTwo(2, 2);