<?php

	$array = array(

		"Fábio Vasques",
		"fulano1",
		"fulano2"
	);

	/*

	$array2 = array($array);

	print_r($array2);
	
	*/

	if(in_array("Fábio Vasques",$array)) {
		echo "valor encontrado";
	}else
		echo "valor não encontrado";

?>