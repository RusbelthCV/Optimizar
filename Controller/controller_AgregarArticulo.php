<?php  
	session_start();
	if(!isset($_SESSION['admin']))
	{
		header("Location:controller_Admin.php");
	}
	else
	{
		$_sMensaje = "";
		if(isset($_POST['enviar']))
		{
			$_sNombre = $_POST['nombre'];
			$_sLink = $_POST['link'];
			$_sCategoria = $_POST['categoria'];
			$_sMensaje = ingresarArticulo($_sNombre,$_sLink,$_sCategoria);
			include_once '../Views/view_AgregarArticulo.php';
		}
		else
		{
			include_once '../Views/view_AgregarArticulo.php';
		}
	}
	function rellenarSelect()
	{
		require_once '../Model/model_Categoria.php';
		$categorias = Categoria::listaCategorias();
		for($i = 0;$i < count($categorias);$i++)
		{
			echo "<option value=".$categorias[$i]['ID'].">".utf8_encode($categorias[$i]['Nombre'])."</option>";
		}
	}
	function ingresarArticulo($nombre,$link,$categoria)
	{
		require_once '../Model/model_Articulo.php';
		$articulo = new Articulo($nombre,$link,$categoria);
		$flagInsercion = $articulo->insertarArticulo();
		if($flagInsercion)
		{
			$mensaje = "El artículo ha sido insertado correctamente";
		}
		else
		{
			$mensaje = "El artículo no ha sido insertado";
		}
		return $mensaje;
	}
?>