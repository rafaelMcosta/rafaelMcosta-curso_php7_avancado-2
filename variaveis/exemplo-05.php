<?php

$nome = "Glaucio";

function teste(){

	global $nome; //usa a variavel nome de escopo global
	echo $nome;

}

function teste2(){

	$nome = "João";
	echo $nome . " agora no teste2";

}

teste();
teste2();

?>