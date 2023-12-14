<?php
session_start();

// include '38_set_sessoes.php';
// echo $name;

/*
$_SESSION['name'] = 'Outro nome';

var_dump($_SESSION);  // eh um array
var_dump($_SESSION['name']);  
*/

if (!isset($_SESSION['auth'])) {
    header('Location:38_set_sessoes.php'); // direciona para outro arquivo
} 

echo 'Painel de Admin';