<?php

$cart = [
    0 => 'Macarrão',
    1 => 'Feijão',
    2 => 'Arroz',
    3 => 'Batata'
];

echo '<pre>';

//ordena o array de forma decrescente
arsort($cart);
var_dump($cart);

echo '<hr>';

//ordena o array de forma crescente
asort($cart);
var_dump($cart);

echo '<hr>';

//ordena as chaves e os valores do arrays
sort($cart);
var_dump($cart);

echo '<hr>';