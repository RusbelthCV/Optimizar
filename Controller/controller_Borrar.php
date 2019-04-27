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
			$id = $_GET['id'];

			Categoria::borrarCategoria($id);
			header("Location:../Controller/controller_ModificarCategoria.php");
		}
		
	}
	
?>