<?php


$content = 'Algo aqui';

// file_put_contents() --> serve para inserir dados em um arquivo

if (file_exists('test_2.txt')) {
    file_put_contents('test_2.txt', $content);
} else {
    echo 'Arquivo não existe!';
}

// file_get_contents() --> serve para ler o conteúdo de um arquivo

if (file_exists('test_2.txt')) {
    var_dump(file_get_contents('test_2.txt', $content));
} else {
    echo 'Arquivo não existe!';
}



