<?php 

	session_start();

	//se existir essa sessão e não estiver vazia...

	if(isset($_SESSION['id']) && empty($_SESSION['id']) ==false) {

		echo "Área restrita!";

	} else {
		header("Location:login.php");
	}



?>