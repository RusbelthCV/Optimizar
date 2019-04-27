<?php 
	session_start();
	if(!isset($_SESSION['admin']))
	{
		header("Location:controller_Admin.php");
	}
	else
	{
		require_once '../Model/model_Articulo.php';
		require_once '../Model/model_Categoria.php';
		
		$mensaje = "";
		if(isset($_POST['nombre']))
		{
			$nombre = $_POST['nombre'];
			$link = $_POST['link'];
			$categoria = $_POST['categoria'];
			Articulo::updateArticulo($_GET['id'],$nombre,$link,$categoria);
			header("Location:controller_ListaArticulos.php");
		}
		else
		{
			if(isset($_GET['id']))
			{
				$dato = Articulo::datosId($_GET['id']);	
			}
			else
			{
				header("Location:controller_ListaArticulos.php");
			}
			include_once '../Views/view_Modificar.php';
			
		}
		
	}
	
	function categorias()
		{
			require_once '../Model/model_Categoria.php';
			$options = Categoria::listaCategorias();
			//$categoria = Articulo::categoriaArticulo($_GET['id']);
			$dato = Articulo::datosId($_GET['id']);
			for ($i=0; $i < count($options); $i++) 
			{
				if($options[$i]['ID'] == $dato['Categoria'])
				{?>
					<option selected value="<?php echo $options[$i]['ID']; ?>"><?php echo utf8_encode($options[$i]['Nombre']); ?></option><?php
				}
				else
				{?>
					<option value="<?php echo $options[$i]['ID']; ?>"><?php echo utf8_encode($options[$i]['Nombre'])?></option><?php
				}
			}
		}

?>