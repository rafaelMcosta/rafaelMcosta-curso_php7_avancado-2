<?php

$link = "https://www.google.com.br/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png";

$content = file_get_contents($link); //pega o conteúdo bruto

$parse = parse_url($link); //pega os dados do link

$basename = basename($parse["path"]); //pega só o nome da imagem

$file = fopen($basename, "w+"); //cria o arquivo se ele não existe

fwrite($file, $content); //escreve no arquivo o conteúdo

fclose($file); //fecha o arquivo

?>

<img src="<?=$basename?>">