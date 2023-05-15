<?php

$name = "EspecializaTi";


// Deixa tudo maiúsculo
echo strtoupper($name);

echo '<hr>';

// Deixa tudo minusculo
echo strtolower($name);

echo '<hr>';


// Deixa a primeira letra maiúscula
echo ucfirst(strtolower($name));

echo '<hr>';


// Deixa a primeira letra de cada palavra maiúscula
echo ucwords(strtolower($name));