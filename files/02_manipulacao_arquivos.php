<?php 

$content = 'Texto teste';
if(file_exists('test.txt')){
  // file_put_contents('test.txt', $content);

  var_dump(file_get_contents('test.txt'));
}else {
  echo 'O arquivo não existe';
}
