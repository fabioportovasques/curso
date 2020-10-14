<?php

	include 'Contato.class.php';

	//Instanciando a class

	$contato = new Contato();

	if(!empty($_GET['id'])) {
		$id  = $_GET['id'];

		$info = $contato->getInfo($id);
		if(empty($info['email'])) {
			header("Location: index.php");
			exit;	
		}

	} else{
		header("Location: inde.php");
		exit;
	}

?>	

<h2>EDITAR</h2>

<form method="POST" action="editar_submit.php">

	<input type="hidden" name="id" value="<?php echo $info['id']; ?>">

	<label>Nome</label>
	<input type="text" name="nome" value="<?php echo $info['nome']; ?>"><br /><br />

	E-mail: <br />
	<?php echo $info['email']; ?><br /><br />

	<input type="submit" vaalue="Salvar" name="">
</form>