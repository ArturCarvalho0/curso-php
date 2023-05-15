<?php

function pt(String $value)
{
  echo "{$value} <br>";
}

// $teste = 123;
// pt($teste);

function sum(int $n1, int $n2): int
{
  return $n1 + $n2;
}

// echo sum(20, 1);

function sumTwo(int $n1, int $n2, int $taxa = 12): int
{
  return ($n1 + $n2) * $taxa;
}

echo sumTwo(1,2);