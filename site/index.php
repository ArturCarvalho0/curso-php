<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu site em PHP</title>
</head>

<body>
    <?php
        //inclui um arquivo php que contém algum código
        // include('includes/header.php');

        // não continua se não encontrar o arquivo
        require('includes/header.php');
    ?>


    <div>
        <?php
        echo "Sou o conteúdo do site"
        ?>
    </div>
    <?php
        //inclui apenas uma vez
        // include_once('includes/footer.php');

        //inclui apenas uma vez
        require_once('include/footer.php')
    ?>
</body>

</html>