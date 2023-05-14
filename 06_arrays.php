<?php

// $cars = array(1,'Artur',2.2);
// var_dump($cars[1]);

// $cars = ['Uno', 'Gol', 'Civic','Supras'];
// var_dump($cars[2]);

/*
$car = [
    'cor' => 'Branco',
    'portas' => 4,
    'ano' => 2018,
];

$car['airbag'] = true;
$car['som'] = 'Paredão';

echo $car['cor'];

$car ['cor'] = 'Preto';

echo $car['cor'];
*/

$cars = [
    'Mercedes' => [
        'color' => 'black',
        'motor' => 5.2,
        'name' => 'c63'
    ],
    'Ford' => [
        'color' => 'yellow',
        'motor' => 2.0,
        'name' => 'Focus'
    ],
    'Ferrari' => [
        'color' => 'red',
        'motor' => 6.0,
        'name' => '488'
    ],
    'Honda' => [
        'color' => 'gray',
        'motor' => 2.0,
        'name' => 'Civic'
    ],
    'Mercedes' => [
        'color' => 'black',
        'motor' => 5.2,
        'name' => 'c63'
    ],
];


echo $cars['Honda']['name'];
$cars['Honda']['name'] = 'Integra';
echo $cars['Honda']['name'];