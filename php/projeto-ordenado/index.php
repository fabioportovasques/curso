<?php

	$dsn = "mysql:dbname=projeto_ordenar;host=localhost";
	$dbuser = "root";
	$dbpass = "F@bio102030";

	try{

		$pdo = new PDO($dsn,$dbuser,$dbpass);


		}catch(PDOException $e){
		echo "Falhou".$e->getMessage();
		exit;
	}

	if(isset($_GET['ordem']) && empty($_GET['ordem']) == false) {
			$ordem = addslashes($_GET['ordem']);
			$sql = "SELECT * FROM usuarios ORDER BY ".$ordem;
		}else {
			$ordem = '';
			$sql = "SELECT * FROM usuarios";
		}

	?>


		<form method="GET">
			<select name="ordem" onchange="this.form.submit()">
				<option></option>
				<option value="nome" <?php echo ($ordem == "nome")?'selected="selected"':''; ?> >Por Nome</option>
				<option value="idade" <?php echo ($ordem == "idade")?'selected="selected"':''; ?> >Por Idade</option>

			</select>

		</form>

		<table border="1" width="400">
			<tr>
				<th>Nome</th>
				<th>Idade</th>
			</tr>


		<?php

		

		
		$sql = $pdo->query($sql);

		if($sql->rowCount() > 0) {

			foreach($sql->fetchAll() AS $usuario){
				
				?>

				<tr>
					<td><?php echo $usuario['nome']; ?></td>
					<td><?php echo $usuario['idade']; ?></td>
				</tr>
				<?php
				}


		

		}else{
			echo "Não existem dados";
		}

		?>

	</table>
				

			