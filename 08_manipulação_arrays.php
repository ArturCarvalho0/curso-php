<?php 

$infoCompany = [
    'name' => 'EspecializaTi',
    'founder' => 'Carlos Ferreira',
    'year_current' => 2023,
];

$infoCompanyTwo = [
    'courses' => ['php','js','laravel'],
    'total_courses' => 26,
];

// var_dump(array_keys($infoCompany));

// var_dump(array_values($infoCompany));

// var_dump(count($infoCompany));

$infoCompany = array_merge($infoCompany, $infoCompanyTwo);

echo '<pre>';
var_dump($infoCompany);
