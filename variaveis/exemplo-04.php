<?php

/*$nome = (int)$_GET["a"];

var_dump($nome);*/

/*$ip = $_SERVER["REMOTE_ADDR"]; //pega o ip do cliente

echo $ip;*/

$ip = $_SERVER["SCRIPT_NAME"]; //mostra o nome do script com caminho

echo $ip;

?>