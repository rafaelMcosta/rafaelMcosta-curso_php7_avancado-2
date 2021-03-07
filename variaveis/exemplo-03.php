<?php

// Tipos básicos - Strings, int, float e booleano
$nome = "Hcode";
$site = 'www.hcode.com.br';

$ano = 1990;
$salario = 5500.99;
$bloqueado = false;
////////////////////////////////////////

// Tipos compostos - Arrays
$frutas = array("abacaxi", "laranja", "manga");

//echo $frutas[2];

// Objetos

$nascimento = new DateTime();

//var_dump($nascimento);

//////////////////////////////////////////

// Tipos Especiais - Resource e NULL
$arquivo = fopen("exemplo-03.php", "r");

//var_dump($arquivo);

$nulo = NULL;
$vazio = "";

?>