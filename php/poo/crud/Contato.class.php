<!DOCTYPE html>
<html>
<head>
	<title></title>




</head>
<body>

</body>
</html>

<?php
class Contato {

	private $pdo;

	public function __construct() {
		$this->pdo = new PDO("mysql:dbname=crudoo;host=localhost", "root", "F@bio102030");
	}

	public function adicionar($email, $nome = '') {
		if($this->existeEmail($email) == false) {
			$sql = "INSERT INTO contatos (nome, email) VALUES (:nome, :email)";
			$sql = $this->pdo->prepare($sql);
			$sql->bindValue(':nome', $nome);
			$sql->bindValue(':email', $email);
			$sql->execute();

			return true;
		} else {
			return false;
		}
	}

	public function getInfo($id) {
		$sql = "SELECT * FROM contatos WHERE id = :id";
		$sql = $this->pdo->prepare($sql);
		$sql->bindValue(':id',$id);
		$sql->execute();

		if($sql->rowCount() > 0) {
			return $sql->fetch();
		} else {
			return array();
		}
	}

	public function getAll() {
		$sql = "SELECT * FROM contatos";
		$sql = $this->pdo->query($sql);

		if($sql->rowCount() > 0) {
			return $sql->fetchAll();
		} else {
			return array();
		}
	}

	public function editar($nome,$email,$id) {
			if($this->existeEmail($email) == false) { 					//Se não existir o email, prossegue
			$sql = "UPDATE contatos SET nome = :nome, email = :email WHERE id = :id";
			$sql = $this->pdo->prepare($sql);
			$sql->bindValue(':nome', $nome);
			$sql->bindValue(':email', $email);
			$sql->bindValue(':id', $id);
			$sql->execute();


			
				?>
				    <script type="text/javascript">
				         window.alert('Alterado com sucesso!')
				         window.location.href='index.php';
				     </script>
				  <?php
						

	}	else {
		
		 ?>              
		    <script type="text/javascript">
		        window.alert('E-mail já existe, tente outro!')
		        window.location.href='.<?php echo $info['email']; ?>.'
		     </script>
		<?php

	}
		
	}

		public function excluir($id) {
		$sql = "DELETE FROM contatos WHERE id = :id";
		$sql = $this->pdo->prepare($ql);
		$sql->bindValue(':id',$id);
		$sql->execute();
		
	}

	public function excluirpeloId($id) {
		$sql = "DELETE FROM contatos WHERE id = :id";
		$sql = $this->pdo->prepare($sql);
		$sql->bindValue(':id',$id);
		$sql->execute();

		?>
				    <script type="text/javascript">
				         window.alert('Excluído  com sucesso!')
				         window.location.href='index.php';
				     </script>
		<?php
		
	}

	private function existeEmail($email) {
		$sql = "SELECT * FROM contatos WHERE email = :email";
		$sql = $this->pdo->prepare($sql);
		$sql->bindValue(':email', $email);
		$sql->execute();

		if($sql->rowCount() > 0) {
			return true;
		} else {
			return false;
		}
	}



}










