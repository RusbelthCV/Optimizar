<?php 
	session_start();
	if(!isset($_SESSION['admin']))
	{
		header("Location:controller_Admin.php");
	}
	else
	{
		require_once '../Model/model_Categoria.php';
		$mensaje = "";
		if(isset($_POST['nombre']))
		{
			insertCat();
			include_once '../Views/view_AgregarCategoria.php';
		}
		else
		{
			include_once '../Views/view_AgregarCategoria.php';		
		}	
	}
	public function insertCat()
	{
		$_sNombreCategoria = $_POST['nombre'];
		$categoria = new Categoria($_sNombreCategoria);
		$categoria->insertarCategoria();
		//Método del modelo Categoria, en el que se inserta en la base de datos
		$mensaje = "La categoria se ha insertado correctamente";	
	}
	
	
?>