<?php 
	session_start();
	if(!isset($_SESSION['admin']))
	{
		header("Location:controller_Admin.php");
	}
	else
	{
		require_once '../Model/model_Categoria.php';

		if(isset($_POST['nombre']))
		{
			Categoria::updateCategoria($_GET['id'],utf8_decode($_POST['nombre']));
		}
		header('Location:../Controller/controller_ModificarCategoria.php');
	}
?>