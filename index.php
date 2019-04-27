<?php  

	if(!isset($_GET['site']))
	{
		$site = 'portada';
	}
	else
	{
		$site = $_GET['site'];
	}

	switch ($site) 
	{
		case 'portada':
		{
			include_once 'Controller/controller_Portada.php';
			break;
		}
	}
?>