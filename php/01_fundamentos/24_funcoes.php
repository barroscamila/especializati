<?php

// 4 => 4*3*2*1 = 24
// 3 => 3*2*1 = 6

function factorial(int $n): int
{
    if ($n <= 1) 
        $n = $n;
    else 
        $n *= factorial($n - 1);

    return $n;
}

echo factorial(4);