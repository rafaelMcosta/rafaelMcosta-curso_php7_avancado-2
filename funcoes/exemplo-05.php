<?php

$a = 10;

// O & antes do parametro é passagem de parametro por referencia, nesse caso utiliza a variavel $a
function trocaValor(&$b){

	$b += 50;

	return $b;

}

echo trocaValor($a);

echo "<br>";

echo trocaValor($a);

echo "<br>";

echo $a;



?>