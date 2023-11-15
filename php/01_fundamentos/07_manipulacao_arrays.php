<?php

// $nomes = array('Carlos', 'EspecializaTi', 'Company');
// $nomes = ['Carlos', 'EspecializaTi', 'Company'];

$name = 'Carlos';
$company = 'EspecializaTi';
$year = '2018';

/*
$infoCompany = [
    $name,
    $company,
    $year    
];
*/

$infoCompany = compact('name', 'company', 'year');
print_r($infoCompany);

var_dump(is_array($name));
var_dump(is_array($infoCompany));

var_dump(in_array('Carlos', $infoCompany));
var_dump(in_array($name, $infoCompany));




