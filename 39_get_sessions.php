 <?php

session_start();

if(!isset($_SESSION['auth'])) {
  header('Location: 38_set_sessions.php');
}

echo 'Painel de admin';

// $_SESSION['name']['lastname'] = "Carlos";
// include './38_set_sessions.php';
// echo $name;
// var_dump($_SESSION);