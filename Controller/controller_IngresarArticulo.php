<?php  
	session_start();
	if(!isset($_SESSION['admin']))
	{
		header("Location:controller_Admin.php");
	}	
	else
	{
		require_once '../Model/model_Articulo.php';
		$_sMensaje = "";
		if(isset($_POST['enviar']))
		{
			$_sNombre = $_POST['nombre'];
			$_sLink = $_POST['link'];
			$_iCategoria = $_POST['categoria'];
			$_oArticulo = new Articulo($_sNombre,$_sLink,$_iCategoria);
			$_oArticulo->insertarArticulo();
			if($_oArticulo)
			{
				$_sMensaje = "Se ha completado el registro perfectamente";
			}
			else
			{
				$_sMensaje = "No se ha podido completar el registro";
			}
			include_once '../Views/view_AgregarArticulo.php';
		}
		else
		{
			include_once '../Views/view_AgregarArticulo.php';	
		}
	}
?>