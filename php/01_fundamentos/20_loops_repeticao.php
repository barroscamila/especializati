<?php


$names = ['a', 'b', 'c', 'd', 'e'];
$i = 0;

while ($i <= count($names)) {
    echo "{$i} <br>";
    $i++;
}

echo '<hr>';

$a = 1;

do {
    echo "{$a} <br>";
    $a++;
} while ($a <= 10);