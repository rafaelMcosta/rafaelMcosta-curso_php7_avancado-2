<?php

$anoNascimento = 1990;

$nomeCompleto = "";

$nome1 = "João";
//$1nome = ""; //não pode
//$_nome = ""; //pode

/* bloco de comentário */

//$this //palavras reservadas não podem ser usadas como variáveis

$sobrenome = "Rangel";

$nomeCompleto = $nome1 . " " . $sobrenome;

echo $nomeCompleto;

exit;

echo $nome1;

echo "</br>";

unset($nome1); //destruir a variável

//isset verifica se a variável existe
if (isset($nome1)){

	echo $nome1;

}

?>