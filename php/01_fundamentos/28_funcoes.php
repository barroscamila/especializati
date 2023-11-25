<?php

$domain = 'https://www.especializati.com.br';

/*
// substitui parte de uma string
echo str_replace('www.', 'https://www.', $domain);
*/

/*
// retorna parte de uma string
echo substr($domain, 0, 4);
echo substr($domain, -6);

echo '<br>';

$protocol = substr($domain, 0, 8);
if ($protocol == 'https://') 
    echo 'É seguro!';
else   
    echo 'Não é seguro!';

echo '<br>';

var_dump(substr($domain, 12, -7));
*/

// conta a quantidade de caracteres da string
echo strlen($domain);