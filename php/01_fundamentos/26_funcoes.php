<?php
/*
$state = 'São Paulo/SP';
$arrayState = explode('/', $state);
var_dump($arrayState);
var_dump($arrayState[0]);
*/

$info = 'São Paulo/SP/Brasil/Terra';
$arrayInfo = explode('/', $info);
var_dump($arrayInfo);

echo '<hr>';

echo implode(' - ', $arrayInfo);
