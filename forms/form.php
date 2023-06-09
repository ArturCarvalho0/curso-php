<?php

echo "Nome: {$_POST['nome']}";
echo '<hr/>';
echo "Senha: {$_POST['senha']}";
echo '<hr/>';
echo "Email: {$_POST['email']}";
echo '<hr/>';
echo "Concordo:" . isset($_POST['concordo']) && $_POST['concordo'] != '' ? 'sim' : 'não';
echo '<hr/>';
echo "Sexo: {$_POST['sexo']}";
echo '<hr/>';
echo "Estado: {$_POST['estado']}";
echo '<hr/>';
echo "Descrição: {$_POST['descricao']}";
echo '<hr/>';
