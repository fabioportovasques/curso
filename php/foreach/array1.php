<?php


	$nomes = array (

			array ("nome"=>"Fábio vasques", "idade"=>32),
			array ("nome"=>"Natcheli vasques", "idade"=>29),
			array ("nome"=>"José vasques", "idade"=>65),
			array ("nome"=>"Leci Porto Vasques", "idade"=>64)
	);

	foreach ($nomes as $pessoas) {
		echo "Pessoa :".$pessoas["nome"]." - Idade: " .$pessoas["idade"] . "<br />";
	}
?>