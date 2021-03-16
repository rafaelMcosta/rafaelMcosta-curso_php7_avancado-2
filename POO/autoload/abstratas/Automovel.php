<?php

interface Veiculo {

	public function acelerar($velocidade);
	public function frenar($velocidade);
	public function trocarMarcha($marcha);

}

// Classe abstrata não pode ser instanciada, deve-se criar uma nova classe que extende dela. Na classe abstrata definimos as ações nos métodos
abstract class Automovel implements Veiculo {

	public function acelerar($velocidade){

		echo "O veículo acelerou até " . $velocidade . " Km/h";

	}

	public function frenar($velocidade){

		echo "O veículo frenou até " . $velocidade . " Km/h";

	}

	public function trocarMarcha($marcha){

		echo "O veículo engatou a marcha " . $marcha;

	}	

}

?>