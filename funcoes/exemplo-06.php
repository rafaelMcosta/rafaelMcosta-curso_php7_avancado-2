<?php

$pessoa = array(

	'nome' =>'João',
	'idade' => 20

);

//usando passagem de parametro por referencia no foreach
foreach ($pessoa as &$value) {

	if (gettype($value) === 'integer') $value += 10; //gettype verifica o tipo de dados
	
	echo $value . '<br>';

}

print_r($pessoa);

?>