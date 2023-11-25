<?php


// combinar um valor unico com a senha do usuario ira fortalecer a segurança
// $salt = 'solekMNj$#019mne';
$password = '12345678';

/*
// md5 -> criptgrafia 32 carateres
echo md5($password);
*/

/*
// sha1 -> criptografia 40 caracteres
echo sha1($password);
*/

/*
// crypt -> criptografia que utiliza uma salt
echo crypt($password, $salt)
*/

/*
// base64 -> criptografa e descriptografa
$passCr = base64_encode($password);
// echo $passCr;
echo base64_decode($passCr);
*/

/*
// hash -> é possivel definir qual algoritmo sera utilizado
echo hash('sha512', $password);
*/

echo cryptC($password);

function cryptC(String $value): String 
{
    $hash = crypt($value, 'solekMNj$#019mne');
    $hash = md5($value);
    $hash = sha1($hash);
    $hash = hash('sha512', $hash);

    return $hash;
;}