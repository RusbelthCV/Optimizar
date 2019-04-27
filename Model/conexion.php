<?php  
	
	try
	{
		$pdo = new PDO('mysql:host=localhost;dbname=wikifit','root','');	
	}
	catch(PDOException $ex)
	{
		echo $ex->getMessage();
	}
?>