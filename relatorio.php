<?php
	include_once 'conexao.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Relatório</title>
</head>
<body>
	<h4>Quais leites estão vencidos?</h4>
	<?php
	$stmt = $db->query("SELECT `marca`, `volume`, `dataValidade`, `id_produto` FROM `leite` WHERE `dataValidade` < CURRENT_DATE ORDER BY `dataValidade` DESC;");
	?>
	<table>
		<thead>
			<th colspan="2">Leites Vencidos</th>
		</thead>
		<tbody>
			<?php

		while($row = $stmt->fetch()):
                    ?>
			<tr>
				<td><?=$row['marca']?></td>
				<td><?=$row['dataValidade']?></td>
			</tr>
			<?php endwhile;?>
		</tbody>
	</table>
	<br><br>
	<h4>Quais os DVDs foram lançados?<!--Separados por ano de lançamento--></h4>
	<?php
	$stmt = $db->query("SELECT `titulo`, `ano`, `id_produto` FROM `dvd` ORDER BY `ano`;");
	?>
	<table>
		<thead>
			<th colspan="2">DVDs Lançados</th>
		</thead>
		<tbody>
			<?php
			while($row = $stmt->fetch()):
                    ?>
			<tr>
				<td><?=$row['titulo']?></td>
				<td><?=$row['ano']?></td>
			</tr>
			<?php endwhile;?>
		</tbody>
	</table>
	<br><br>
	<h4>Qual o valor total dos produtos contidos no estoque?</h4>
	<?php
	$stmt = $db->query("SELECT SUM(`preco`) FROM `produto`;");
	$row = $stmt->fetch();
	?>
	<h5><?=$row["SUM(`preco`)"]?> reais</h5>
</body>
</html>
