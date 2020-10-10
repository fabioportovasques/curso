<?php


	function somarNumero($x, $y) {
		$conta = $x + $y;
		return $conta;
	}

	$resultado = somarNumero(20,30);

	echo "Resultado : ". $resultado."<br />";

	function mostrarNome() {
		return "fabio";
	}

	echo "Meu nome é: ".mostrarNome();

?>