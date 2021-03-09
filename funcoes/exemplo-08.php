<?php

//passagem de vários parametros inteiros
function soma(float...$valores):float{

	return array_sum($valores); //array_sum soma valores de um array passado

}

echo var_dump(soma(2, 2));
echo '<br>';
echo soma(25, 33);
echo '<br>';
echo soma(1.5, 3.2);
echo '<br>';

?>