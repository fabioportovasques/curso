<?php

	$dsn = "mysql:dbname=blog;host=localhost";
	$dbuser = "root";
	$dbpass = "F@bio102030";

	try{

		$pdo = new pdo($dsn,$dbuser,$dbpass);


	} catch(PDOException $e) {

		echo "falha ao conectar".$e->getMessage();
	}


?>