<?php
error_reporting(0);
ini_set("display_errors", 0);

/*
    Tipos de requisições: 
        GET: os dados do form sao expostos na url
        POST: os dados sao enviados de forma oculta
    $_GET ou $_POST, vai depender do metodo especificado na tag <form>

    $_REQUEST -> é universal, independe do método get ou post
*/


/*
echo "Nome: {$_POST['nome']}";
echo '<hr>';
echo "Senha: {$_POST['senha']}";
echo '<hr>';
echo "E-mail: {$_POST['email']}";
echo '<hr>';
echo 'Concordou?: ' . isset($_POST['concordo']) && $_POST['concordo'] != '' ? 'Sim' : 'Não';
echo '<hr>';
echo "Sexo: {$_POST['sexo']}";
echo '<hr>';
echo "Estado: {$_POST['estado']}";
echo '<hr>';
echo "Descrição: {$_POST['descricao']}";
*/

echo "Nome: {$_REQUEST['nome']}";
echo '<hr>';
echo "Senha: {$_REQUEST['senha']}";
echo '<hr>';
echo "E-mail: {$_REQUEST['email']}";
echo '<hr>';
echo 'Concordou?: ' . isset($_REQUEST['concordo']) && $_REQUEST['concordo'] != '' ? 'Sim' : 'Não';
echo '<hr>';
echo "Sexo: {$_REQUEST['sexo']}";
echo '<hr>';
echo "Estado: {$_REQUEST['estado']}";
echo '<hr>';
echo "Descrição: {$_REQUEST['descricao']}";




