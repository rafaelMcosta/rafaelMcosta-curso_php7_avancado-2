<?php

require_once("config.php");

//Carrrega todos os usuários do banco passando a query para o método select
/*$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);*/

//Carrega apenas o usuário com id 3
/*$root = new Usuario();

$root->loadById(3);

echo $root;*/

//Carrega todos os usuários utilizando um método estático getList()
/*$lista = Usuario::getList();

echo json_encode($lista);*/

//Carrega uma lista de usuários buscando pelo login
/*$search = Usuario::search("jo");

echo json_encode($search);*/

//Carrega um usuário usando o login e a senha
/*$usuario = new Usuario();
$usuario->login("root", "!@#$");

echo $usuario;
*/

//Inserindo um usuário no banco
/*$aluno = new Usuario("aluno", "@luno");

$aluno->insert();

echo $aluno;*/

//Alterando um usuário
/*$usuario = new Usuario();

$usuario->loadById(8);

$usuario->update("professor", "!¨#$@%*&");

echo $usuario;*/

$usuario = new Usuario();

$usuario->loadById(7);

$usuario->delete();

echo $usuario;

?>