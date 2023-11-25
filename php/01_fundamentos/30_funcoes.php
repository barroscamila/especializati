<?php

date_default_timezone_set('America/Sao_Paulo');

echo 'O ano atual é: ' . date('y') . '<br>';
echo 'O ano atual é: ' . date('Y') . '<br>';

echo '<hr>';

echo 'O mêss atual é: ' . date('m') . '<br>';
echo 'O dia atual é: ' . date('d') . '<br>';

echo '<hr>';

echo 'A data atual é: ' . date('d/m/y') . '<br>';
echo 'A data atual é: ' . date('y-m-d') . '<br>';

echo '<hr>';

echo 'Hora atual: ' . date('H') . '<br>';
echo 'Minuto atual: ' . date('i') . '<br>';
echo 'Segundo atual: ' . date('s') . '<br>';
echo 'Horario atual: ' . date('H:i:s') . '<br>';