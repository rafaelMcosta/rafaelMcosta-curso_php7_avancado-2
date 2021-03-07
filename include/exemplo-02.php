<?php

//include "inc/exemplo-01.php"; //tenta funcionar de qualquer jeito

require_once "inc/exemplo-01.php"; //obriga que o arquivo exista e funcione corretamente

require_once "inc/exemplo-01.php"; //tras só uma vez, diferente de só require, também vale para include

$resultado = soma(10, 25);

echo $resultado;

?>