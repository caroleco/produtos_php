<?php
	include_once 'conexao.php';

	if(isset($_POST['cadleite'])){
		$cod = $_POST['cod'];
		$preco = $_POST['preco'];
		$marca = $_POST['marca'];
		$vol = $_POST['volume'];
		$dataval = $_POST['dataval'];
	/*
			EXEMPLO
	INSERT INTO user (id, name, username, opted_in)
  SELECT id, name, username, opted_in 
  FROM user LEFT JOIN user_permission AS userPerm ON user.id = userPerm.user_id
	*/
		$sql = "INSERT INTO `produto`(`codigo`, `preco`) VALUES (:cod,:preco)";

		$stmt = $db->prepare($sql);
		$stmt->bindValue(':cod',$cod);
		$stmt->bindValue(':preco',$preco);

		$sql = "SELECT * FROM ``";

/*
	$sql = "INSERT INTO `exercicio`.`tb_aluno` (`nome_aluno`) VALUES(:nome);";

	$stmt = $db->prepare($sql);
	$stmt->bindValue(':nome',$nome);
	//$valores = array($nome);*/
	if($stmt->execute()){
		echo "Registro Adicionado";
	}else{
		echo "Registro não adicionado";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Cadastro</title>
</head>
<body>
	<legend>Cadastrar Produto - Leite</legend>>
	<form action="" method="post">
		<input type="int" name="cod" placeholder="Código">
		<input type="number" name="preco" placeholder="Preço">
		<input type="text" name="marca" placeholder="Marca">
		<input type="number" name="volume" placeholder="Volume">
		<input type="date" name="dataval" placeholder="Data Validade">
		<input type="submit" name="cadleite" value="Cadastrar">
	</form>
	<br><br>
	<legend>Cadastrar Produto - DVD</legend>>
	<form action="" method="post">
		<input type="int" name="cod" placeholder="Código">
		<input type="number" name="preco" placeholder="Preço">
		<input type="text" name="titulo" placeholder="Título">
		<input type="number" name="ano" placeholder="Ano">
		<input type="submit" name="cadprod" value="Cadastrar">
	</form>
</body>
</html>