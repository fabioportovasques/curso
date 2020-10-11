<?php
	
	$dsn = "mysql:dbname=projeto_comentarios;host=localhost";
	$dbuser = "root";
	$dbpass = "F@bio102030";

	try{
		$pdo = new PDO ($dsn,$dbuser,$dbpass);

	}catch(PDOException $e){
		echo "fala".$e->getMessage();
		exit;

	}
	
	if(isset($_POST['nome']) && empty($_POST['nome']) == false){

		$nome = $_POST['nome'];
		$mensagem = $_POST['mensagem'];

		$sql = $pdo->prepare("INSERT INTO mensagens SET nome = :nome, msg = :msg, data_msg = NOW()");
		$sql->bindValue(":nome",$nome);
		$sql->bindValue(":msg",$mensagem);
		$sql->execute();
	}


?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<fieldset>
		<form method="POST">
			
			<label>Nome</label>
			<input type="text" name="nome">
			<br />
			<br />

			<label>Mensagem</label>
			<textarea name="mensagem"></textarea>
			<br />
			<br />

			<input type="submit" value="Enviar">
	</fieldset>
	<br />
	<br />

	<?php

		$sql = "SELECT * FROM mensagens ORDER BY data_msg DESC";
		$sql = $pdo->query($sql);

		if($sql->rowCount() > 0){
			foreach ($sql->fetchAll() as $mensagem){
				?>
					<strong><?php echo $mensagem['nome'];?></strong>
					<?php echo $mensagem['msg'];?>
					<hr />
				<?php
			}
			
		} else {
			echo "Não há mensagens";
		}

	?>




</body>
</html>