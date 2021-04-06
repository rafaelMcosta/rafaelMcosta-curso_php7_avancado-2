<?php

$images = scandir("images");

//var_dump($images);

$data = array();

foreach ($images as $img) {

	//in_array faz um busca dentro de um array
	if(!in_array($img, array(".", ".."))){

		$filename = "images" . DIRECTORY_SEPARATOR . $img;

		$info = pathinfo($filename); //traz informações de um arquivo

		$info["size"] = filesize($filename); //adiciona a chave "size" no array com a informação do tamanho do arquivo

		$info["modified"] = date("d/m/Y H:i:s", filemtime($filename)); //adiciona a chave "modified" no array com a informação de quando ele foi modificado

		$info["url"] = "http://localhost:81/curso_php7_avancado%202/DIR/" .str_replace("\\", "/", $filename) ;

		array_push($data, $info);

	}

}

echo json_encode($data);

?>