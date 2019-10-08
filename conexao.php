<?php		
	try{
    	$db = new PDO("mysql:host=localhost;port=3306;dbname=exercicio","root","");
 	}catch(PDOException $e){
    	echo $e->getmessage();
 	}
?>