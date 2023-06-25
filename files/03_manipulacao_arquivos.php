<?php

$text = "Texto novo";

generateLog($text);

function generateLog($text)
{
  $file = fopen('projetoX.log', 'a+ ');

  fwrite($file, "$text \r\n");

  fclose($file);
};
