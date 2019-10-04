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
	<table>
		<thead>
			<th colspan="2">Leites Vencidos</th>
		</thead>
		<tbody>
			<tr>
				<td><!--Nome do leite--></td>
				<td><!--Data--></td>
			</tr>
		</tbody>
	</table>
	<br><br>
	<h4>Quais os DVDs foram lançados?<!--Separados por ano de lançamento--></h4>
	<table>
		<thead>
			<th colspan="2">DVDs Lançados</th>
		</thead>
		<tbody>
			<tr>
				<td><!--Titulo--></td>
				<td><!--Ano--></td>
			</tr>
		</tbody>
	</table>
	<br><br>
	<h4>Qual o valor total dos produtos contidos no estoque?</h4>
	<h5><!--Valor total--></h5>
</body>
</html>