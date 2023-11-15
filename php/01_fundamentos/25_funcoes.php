<?php

$name = 'esPEcializATi - Cursos ONliNe de TI';

echo strtoupper($name);  // maiusculo
echo '<hr>';
echo strtolower($name);  // minusculo
echo '<hr>';
echo ucfirst($name);  // primeira letra maiuscula 
echo '<hr>';
echo ucfirst(strtolower($name)); 
echo '<hr>';
echo ucwords(strtolower($name)); // primeira letra maiuscula de cada palavra
