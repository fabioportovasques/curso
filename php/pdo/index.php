<?php

	$dsn = "mysql:dbname=blog;host=localhost";
	$dbuser = "root";
	$dbpass = "F@bio102030";

	try {

		$pdo = new PDO($dsn ,$dbuser,$dbpass);


		//Inserindo dados:

		/*

		$nome = "Natcheli Vasques";
		$email = "natcheli@email.com";
		$senha = md5("224445");

		$sql = "INSERT INTO usuarios SET nome = '$nome', email = '$email', senha = '$senha'";
		$sql = $pdo->query($sql);

		echo "usuario inserido com sucesso: ".$pdo->lastInsertId();

		echo "<hr>";

		*/

		/*

		//Listando dados

		$sql = "SELECT * FROM usuarios";
		$sql = $pdo->query($sql);

		//verificar se contem dados

		if ($sql->rowCount() > 0 ) {

			foreach ($sql->fetchAll() AS $usuario ) {
				echo "Nome: ". $usuario["nome"]."<br />";
				echo "email: ". $usuario["email"]."<br />";
				echo "senha: ". $usuario["senha"]."<br />";
				echo "<hr />";
				echo "<br />";
			}

		}else {
			echo "Não há usuarios cadastrados";
		}

		*/

		/*

		$sql = "UPDATE  usuarios SET email = 'abc@hotmail.com' WHERE nome = 'testeeee'"; 
		$sql = $pdo->query($sql);

		echo "usuario alterado com sucesso";

		*/

		//Deletar Dados


		$sql =  "DELETE FROM usuarios WHERE nome = 'teste08'";
		$sql = $pdo->query($sql);

		echo "usuario deletado  com sucesso";

	} catch(PDOException $e) {
			echo "falhou :".$e->getMessage();
	}


?>




