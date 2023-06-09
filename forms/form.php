<?php

if ($_REQUEST['nome'] == '' && strlen($_REQUEST['nome']) <= 3) {
  echo 'O campo nome é invalido';

  return;
}

echo "Nome: {$_REQUEST['nome']}";
echo '<hr/>';
echo "Senha: {$_REQUEST['senha']}";
echo '<hr/>';
echo "Email: {$_REQUEST['email']}";
echo '<hr/>';
echo "Concordo:" . isset($_REQUEST['concordo']) && $_REQUEST['concordo'] != '' ? 'sim' : 'não';
echo '<hr/>';
echo "Sexo: {$_REQUEST['sexo']}";
echo '<hr/>';
echo "Estado: {$_REQUEST['estado']}";
echo '<hr/>';
echo "Descrição: {$_REQUEST['descricao']}";
echo '<hr/>';



// echo "Nome: {$_POST['nome']}";
// echo '<hr/>';
// echo "Senha: {$_POST['senha']}";
// echo '<hr/>';
// echo "Email: {$_POST['email']}";
// echo '<hr/>';
// echo "Concordo:" . isset($_POST['concordo']) && $_POST['concordo'] != '' ? 'sim' : 'não';
// echo '<hr/>';
// echo "Sexo: {$_POST['sexo']}";
// echo '<hr/>';
// echo "Estado: {$_POST['estado']}";
// echo '<hr/>';
// echo "Descrição: {$_POST['descricao']}";
// echo '<hr/>';
