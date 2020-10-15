<?php
include 'Contato.class.php';

$contato = new Contato();



if(!empty($_POST['id'])) {
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$id = $_POST['id'];

	if(!empty($email)){
		$contato->editar($nome,$email,$id);			//se o campo email não estiver em branco prossegue

	}

	
}