<?php

// cria um novo arquivo
// var_dump(touch('test.txt'));

// renomeia um arquivo existente
// var_dump(rename('test.txt', 'test_2.txt'));

// verifica se um arquivo existe
var_dump(file_exists('test_2.txt'));

// copia um arquivo
// var_dump(copy('test_2.txt', 'test.txt'));

// remove um arquivo
var_dump(unlink('test.txt'));