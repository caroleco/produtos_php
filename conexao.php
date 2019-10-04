<?php
	try {
		$db = new PDO("mysql:host=localhost;port=3306;dbname=exercicio","root","");
	}catch {
	    echo("Não há conexão com o banco de dados.");
	}
?>