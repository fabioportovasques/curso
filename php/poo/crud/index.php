<?php

	include 'Contato.class.php';

	//Instanciando a class

	$contato = new Contato();

	//$contato->adicionar('fabioportovasques@defend.com.br', 'Fábio Geovane Porto Vasques');
	//$contato->adicionar('fulano@gmail.com');

	//$nome = $contato->getNome('fabioportovasques@defend.com.br');

	//echo "Nome : ".$nome;

	//$contato->editar('fabio','fabioportovasques@defend.com.br');
	
	//$excluir = $contato->excluir('fulano@gmail.com');



?>


	<h1>Contatos</h1>

	<h3><a href="adicionar.php">[Adicionar ]</a></h3>

	<table border="1px" width="600">
		<tr>
			<th>ID</th>
			<th>NOME</th>
			<th>EMAIL</th>
			<th>AÇÕES</th>
		</tr>

		<?php

			$lista = $contato->getAll();
			foreach ($lista as $item):
			?>
		

		
		<tr>
			<td><?php echo $item['id']; ?></td>
			<td><?php echo $item['nome']; ?></td>
			<td><?php echo $item['email']; ?></td>
			<td><a href="editar.php?id=<?php echo $item['id']; ?>">Editar</a>
			<a href="excluir.php?id=<?php echo $item['id'];?>">Excluir</a></td>
		</tr>

		<?php endforeach; ?>
		


	</table>