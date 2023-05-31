<?php

$name = "Artur";

if (isset($name))
  echo $name;
else
  echo 'Não existe';

unset($name);

if (isset($name))
  echo $name;
else
  echo 'Não existe';
