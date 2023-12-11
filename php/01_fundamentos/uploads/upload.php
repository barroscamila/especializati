<?php

// echo '<PRE>';
// var_dump($_FILES);

$photos = $_FILES['photos'];
$path = '../uploads/imgs/';

// caso nao exista ainda, cria o diretorio
if (!is_dir($path)) {
    mkdir($path);
}

for ($i = 0; $i < count($photos['name']); $i++) {
    if ( move_uploaded_file($photos['tmp_name'][$i], $path . $photos['name'][$i]) ) 
        echo "Sucesso ao mover o arquivo {$i} <br>";
    else 
        echo "Falha ao mover o arquivo {$i}";
}