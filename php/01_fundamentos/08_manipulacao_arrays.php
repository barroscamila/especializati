<?php

$infoCompany = [
    'name'          => 'EspecializaTi',
    'founder'       => 'Carlos Ferreira',
    'year_currente' => 2018 
];

$infoCompanyTwo = [
    'courses' => ['PHP', 'JS', 'Vue JS', 'Laravel'],
    'total_courses' => 26
];

// var_dump(array_keys($infoCompany));

// var_dump(array_values($infoCompany));

// var_dump(count($infoCompany));

$infoCompany = array_merge($infoCompany, $infoCompanyTwo);

var_dump($infoCompany);



