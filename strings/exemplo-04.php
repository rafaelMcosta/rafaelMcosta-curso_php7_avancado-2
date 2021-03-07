<?php

$frase = "A repetição é mãe da retenção.";

$palavra = "mãe";

$q = strpos($frase, $palavra); //mostra a posição de inicio da palavra mãe, porém devido a encodação utf8 do PHP ele conta 2 letras para cada caracter especial (ç ã é)

$texto = substr($frase, 0, $q);

var_dump($texto);

$texto2 =substr($frase, $q + strlen($palavra), strlen($frase));

echo "<br>";

var_dump($texto2);

?>