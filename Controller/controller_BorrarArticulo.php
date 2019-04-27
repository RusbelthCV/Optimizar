<?php 
	session_start();
	if(!isset($_SESSION['admin']))
	{
		header("Location:controller_Admin.php");
	}
	else
	{
		require_once '../Model/model_Articulo.php';
		if(isset($_GET['id']))
		{
			Articulo::deleteArticulo($_GET['id']);
		}
		header("Location:../Controller/controller_ListaArticulos.php");
	}
?>