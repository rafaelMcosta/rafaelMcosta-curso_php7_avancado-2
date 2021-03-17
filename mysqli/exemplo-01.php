<?php

$conn = new mysqli("localhost", "root", "", "dbphp7");

//teste de conexão
if($conn->connect_error){

	echo "Error: " . $conn->connect_error;

}

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(?, ?)");

$stmt->bind_param("ss", $login, $pass); //indica os tipos de dados que serão passados, neste caso serão duas strings (deslogin e dessenha), um s para o primeiro e outro s pro segundo. Para inteiro seria i, para float d de double

$login = "user";
$pass = "12345";

$stmt->execute();

$login = "root";
$pass = "!@#$";

$stmt->execute();

?>