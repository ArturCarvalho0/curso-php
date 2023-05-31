<?php


date_default_timezone_set('America/Sao_paulo');
echo 'O ano atual é ' . date('Y') . '<br>';
echo 'O mês atual é ' . date('m') . '<br>';
echo 'O dia atual é ' . date('d') . '<br>';
echo 'O data atual é ' . date('d/m/Y') . '<br>';
echo 'O data atual é ' . date('d-m-Y') . '<br>';
echo 'Hora atual é ' . date('H') . '<br>';
echo 'Minuto atual é ' . date('i') . '<br>';
echo 'Segundo atual é ' . date('s') . '<br>';
echo 'Hora atual é ' . date('H:i:s') . '<br>';
echo  'Timezone' . date_default_timezone_get() . '<br>';
