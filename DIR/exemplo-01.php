<?php

$name = "images";

if (!is_dir($name)){ //verifica se o diretório não existe

	mkdir($name); //cria um diretório
	echo "Diretório $name criado com sucesso";

}else{

	rmdir($name);
	echo "Já existe o diretório: $name foi removido";

}

?>