<?php
	
	require 'config.php';

	if(isset($_POST['nome']) && empty($_POST['nome']) == false) {
			$nome = addslashes($_POST['nome']);						//addslashes segurança
			$email = addslashes($_POST['email']);					//addslashes segurança
			$senha = md5(addslashes($_POST['senha']));				//addslashes segurança

			$sql = "INSERT INTO usuarios SET nome = '$nome', email = '$email', senha = '$senha' ";
			$pdo->query($sql);

			header ("Location: index.php");
	}	



?>

<form method="POST"> 
	nome:<br />
	<input type="text" name="nome"><br /><br />

	Email:<br/>
	<input type="text" name="email"><br /><br />

	Senha: <br />
	<input type="password" name="senha"><br /><br />

	<input type="submit" name="" value="cadastrar" />
</form>