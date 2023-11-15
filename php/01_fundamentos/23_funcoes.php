<?php

$taxa = 2;

function sum(int $n1, int $n2):Array
{
    global $taxa;
    $calc = ($n1 + $n2) * $taxa;
    
    $teste = 10;

    return [
        'soma' => $calc, 
        ' teste' => $teste,
    ];

}

$result = sum(2, 2);
var_dump($result);

// echo sum(2, 2)['soma'];