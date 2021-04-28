<?php

$image = imagecreatefromjpeg("certificado.jpg");

$titleColor = imagecolorallocate($image, 0, 0, 0);

$gray = imagecolorallocate($image, 100, 100, 100);

//DESTE JEITO APRESENTADO PELOS PROFESSORES NÃO FUNCIONA NO PHP 7.2.1
/*imagettftext($image, 32, 0, 450, 150, $titleColor, "fonts" .DIRECTORY_SEPARATOR. "Bevan" .DIRECTORY_SEPARATOR. "Bevan-Regular.ttf", "CERTIFICADO");

imagettftext($image, 32, 0, 440, 350, $titleColor, "fonts" .DIRECTORY_SEPARATOR. "Playball" .DIRECTORY_SEPARATOR. "Playball-Regular.ttf", "Divanei Aparecido");*/

//ALTERADO POR ESSE CÓDIGO E ADICIONADO AS VARIAVEIS CORRESPONDENTES NAS FUNÇÕES imagettftext()
$font1 = __DIR__ .DIRECTORY_SEPARATOR. "fonts" .DIRECTORY_SEPARATOR. "Bevan" .DIRECTORY_SEPARATOR. "Bevan-Regular.ttf";

$font2 = __DIR__ .DIRECTORY_SEPARATOR. "fonts" .DIRECTORY_SEPARATOR. "Playball" .DIRECTORY_SEPARATOR. "Playball-Regular.ttf";

imagettftext($image, 32, 0, 320, 250, $titleColor, $font1, "CERTIFICADO");

imagettftext($image, 32, 0, 375, 350, $titleColor, $font2, "Divanei Aparecido");
//FIM DA ALTERAÇÃO

imagestring($image, 3, 440, 370, utf8_decode("Concluído em: ") . date("d/m/Y"), $titleColor);

header("Content-Type: image/jpeg");

$dia = date("Y-m-d");

imagejpeg($image); //segundo parametro ele salva em disco e o terceiro define a qualidade da imagem (escala de 0% a 100%)

imagedestroy($image);

?>
