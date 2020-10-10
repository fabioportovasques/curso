<?php
	
	$aluno = array(
			"nome"=>"fabio vasques",
			"idade"=>32,
			"estado"=>"RS",
			"pais"=>"Brasil"


	);
	
	foreach ($aluno as $chave => $dado) {
		echo "".$chave.":". $dado . "<br />";
	}


?>