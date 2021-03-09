<?php

//no parametro definido na chamada da função se nada passado será usado o parametro da função, na chamada se for espaço vazio, ficará vazio
function ola($texto = "Mundo", $periodo = "Bom dia"){

	return "Olá $texto! $periodo!<br>";

}

echo ola();
echo ola("", "Boa noite");
echo ola("Glaucio", "Boa tarde");
echo ola("João", "");

?>