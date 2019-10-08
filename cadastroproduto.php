<?php
	include_once 'conexao.php';

	if(isset($_POST['cadleite'])){

		$cod = $_POST['cod'];
		$preco = $_POST['preco'];
		$marca = $_POST['marca'];
		$vol = $_POST['volume'];
		$dataval = $_POST['dataval'];
	
		$sql = "INSERT INTO `produto`(`codigo`, `preco`) VALUES (:cod,:preco)";
		$sqlprod ="INSERT INTO `leite`(`marca`, `volume`, `dataValidade`, `id_produto`) VALUES (:marca,:volume,:dataValidade,LAST_INSERT_ID());";

		$stmt = $db->prepare($sql);
		$stmtp = $db->prepare($sqlprod);
		$stmt->bindValue(':cod',$cod);
		$stmt->bindValue(':preco',$preco);
		$stmtp->bindValue(':marca',$marca);
		$stmtp->bindValue(':volume',$vol);
		$stmtp->bindValue(':dataValidade',$dataval);

	if($stmt->execute() && $stmtp->execute()){
		echo "Registro Adicionado";
	}else{
		echo "Registro não adicionado";
	}
}

if(isset($_POST['caddvd'])){

		$cod = $_POST['cod'];
		$preco = $_POST['preco'];
		$titulo = $_POST['titulo'];
		$ano = $_POST['ano'];
	
		$sql = "INSERT INTO `produto`(`codigo`, `preco`) VALUES (:cod,:preco)";
		$sqlprod ="INSERT INTO `dvd`(`titulo`, `ano`, `id_produto`) VALUES (:titulo,:ano,LAST_INSERT_ID());";

		$stmt = $db->prepare($sql);
		$stmtp = $db->prepare($sqlprod);
		$stmt->bindValue(':cod',$cod);
		$stmt->bindValue(':preco',$preco);
		$stmtp->bindValue(':titulo',$titulo);
		$stmtp->bindValue(':ano',$ano);

	if($stmt->execute() && $stmtp->execute()){
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
	<legend>Cadastrar Produto - Leite</legend>
	<form action="" method="post">
		<input type="int" name="cod" placeholder="Código">
		<input type="number" name="preco" placeholder="Preço">
		<input type="text" name="marca" placeholder="Marca">
		<input type="number" name="volume" placeholder="Volume">
		<input type="date" name="dataval" placeholder="Data Validade">
		<input type="submit" name="cadleite" value="Cadastrar">
	</form>
	<br><br>
	<legend>Cadastrar Produto - DVD</legend>
	<form action="" method="post">
		<input type="int" name="cod" placeholder="Código">
		<input type="number" name="preco" placeholder="Preço">
		<input type="text" name="titulo" placeholder="Título">
		<input type="number" name="ano" placeholder="Ano">
		<input type="submit" name="caddvd" value="Cadastrar">
	</form>
</body>
</html>