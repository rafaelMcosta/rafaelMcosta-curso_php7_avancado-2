<?php

$dt = new DateTime();

$periodo = new DateInterval("P15D"); //intervalo de 15 dias

echo $dt->format("d/m/Y H:i:s"); //formata a saída da data

$dt->add($periodo); //adiciona um período

echo "<br>";

echo $dt->format("d/m/Y H:i:s");

?>