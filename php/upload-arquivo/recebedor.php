<?php

	$arquivo = $_FILES['arquivo'];

	if(isset($arquivo['tmp_name']) && empty($arquivo['tmp_name']) == false) {

		//criptografa o nome do arquivo e o rand gera nomes aleatorio para nunca se repetir

		$nomedoarquivo = md5(time().rand(0,99)).'.jpg';			

		move_uploaded_file($arquivo['tmp_name'],'img/'.$nomedoarquivo);

		echo "Arquivo enviado com sucesso!!!";

		header('Location: index.php');
	}



?>