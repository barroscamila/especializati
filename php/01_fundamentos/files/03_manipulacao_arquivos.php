<?php

// há diferntes modos que podem ser utilizados na função fopen(), o 'a+' cria o arquivo se ele não existir e abre para leitura e escrita

$test = 'Hoje é um lindo dia';
generateLog($test);

function generateLog($test) 
{
    $file = fopen('projetoX.log', 'a+');

    fwrite($file, "$test \r\n");
    
    fclose($file);    
}

