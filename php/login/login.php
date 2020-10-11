<?php
	session_start();

	if (isset($_POST['email']) && empty($_POST['email']) == false) {
		$email = addslashes($_POST['email']);
		$senha = md5(addslashes($_POST['senha']));

		$dsn = "mysql:dbname=blog;host=localhost";
		$dbuser = "root";
		$dbpass = "F@bio102030";

		try{
			$db = new PDO($dsn,$dbuser,$dbpass);

			$sql = $db->query("SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'");

			if ($sql->rowCount() > 0) {

				$dado = $sql->fetch();

				$_SESSION['id'] = $dado['id'];		//Salva o id do usuario na sessão

				header("Location: index.php");
			}

		}catch(PDOException $e){
			echo "falhou".$e->getMessage();
		}
	}
?>

Página de login <br /><br />

<form method="POST"> 


	Email:<br/>
	<input type="text" name="email" value=""><br /><br />

	Senha:<br/>
	<input type="password" name="senha" value=""><br /><br />

	<input type="submit" value="Acessar" />
</form>