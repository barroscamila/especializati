<?php

$a = 2;
$b = 2;

/*
$a++; // pos incremento
$a--; // pos decremento
*/

/*
++$a; // pre incremento
--$a; // pre decremento
*/

echo $a + $b++;
echo '<br>';
echo $a + $b;
echo '<br>';
echo $a + --$b;
echo '<br>';
echo --$a + --$b;