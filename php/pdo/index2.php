<?php

	$dsn = "mysql:dbname=blog;host=localhost";
	$dbuser = "root";
	$dbpass = "F@bio102030";

	try{

		$pdo = new PDO($dsn ,$dbuser,$dbpass);

		$nome = 'fulaninho';
		$id = 5;

		$sql = "UPDATE usuarios SET nome = :novonome WHERE id = :id";

		$sql = $pdo->prepare($sql);
		$sql->bindValue(':novonome', $nome);
		$sql->bindValue(':id', $id);
		$sql->execute();

		echo "usuario atualizado com sucesso!!!";



	}catch(PDOException $e){
		echo "Falhou".$e->getMessage();

	}




?>