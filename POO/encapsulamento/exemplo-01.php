<?php

class Pessoa{

	public $nome = "Rasmus Lerdorf";
	protected $idade = 48; //só quem tá na propria classe e a herdeira
	private $senha = "123456"; //só funciona na propria classe

	public function verDados(){

		echo $this->nome . "<br>";
		echo $this->idade . "<br>";
		echo $this->senha . "<br>";

	}

}

$objeto = new Pessoa();

/*echo $objeto->nome . "<br>";
echo $objeto->idade . "<br>";
echo $objeto->senha . "<br>";*/

$objeto->verDados();

?>