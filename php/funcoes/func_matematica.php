<?php

	//Arrendondar numeros

	echo round(2.8);

	echo "<br />";
	//Arrendondar numeros para cima

	echo ceil(9.5);

	echo "<br />";

	//Arrendondar numeros para baixo

	echo floor(2.999);

	echo "<br />";

	//retorna inteiro aleatório(usado em sorteio)

	$lista = array ("fulano1","fulano2","fulando3","fulando4","fulando5","fabio vasques");

	$x = rand(0,5);


	echo "E o sorteado é: ".$lista[$x];


	
?>