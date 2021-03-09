<?php

function ola(){

	$argumentos = func_get_args(); //função interna que pega os parametros passados para ola() e retorna um array

	return $argumentos;

}

var_dump(ola("Bom dia", 10));

?>