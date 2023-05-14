<?php

$cart = ['Arroz', 'Sabão', 'Feijão', 'Balinhas'];
var_dump($cart);

echo '<hr>';

//Remove o ultimo elemento do array
array_pop($cart);
var_dump($cart);

echo '<hr>';

//remove o primeiro elemento do array
array_shift($cart);
var_dump($cart);

echo '<hr>';

//remove a posição do array
unset($cart[0]);
var_dump($cart);

echo '<hr>';

//Adiciona um elemento no final do array
array_push($cart, 'Tapete');
array_push($cart, 'Rodo');
var_dump($cart);

echo '<hr>';

//Adiciona um elemento no começo do array
array_unshift($cart, 'Micro-ondas');
array_unshift($cart, 'Tapete');
var_dump($cart);

echo '<hr>';

//Remove elementos duplicados do array
$cart = array_unique($cart);
var_dump($cart);