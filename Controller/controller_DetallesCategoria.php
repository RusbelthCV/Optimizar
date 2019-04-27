<?php  
	session_start();
	if(!isset($_SESSION['admin']))
	{
		header("Location:controller_Admin.php");
	}
	else
	{
		require_once '../Model/model_Categoria.php';
		
		if(isset($_GET['id']))
		{
			$datos = Categoria::datosCategoria($_GET['id']);
		}
		else
		{
			header("Location:controller_ModificarCategoria.php");
		}
		
		
		include_once'../Views/view_DetallesCategoria.php';
	}
?>