<?php

$cep = "01310100";
$link = "https://viacep.com.br/ws/$cep/json/";

$ch = curl_init($link);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); //informa que haverá uma resposta

curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); //pula a verificação do SSL

$response = curl_exec($ch);

curl_close($ch);

$data = json_decode($response, true); //colocando true ele não vira objeto

print_r($data["localidade"]);

?>