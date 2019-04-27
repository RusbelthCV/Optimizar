<?php  	
	session_start();
	if(isset($_SESSION['admin']))
	{
		session_destroy();
		header("Location:../index.php");
	}
	else
	{}
	function datos()
	{
		if(isset($_POST['buscador']))
		{
			$datos = busquedaNombre($_POST['buscador']);	
		}
		else if(isset($_POST['categories']))
		{
			if($_POST['categories'] == "todos")
			{
				$datos = todos();
			}
			else
			{
				$datos = busquedaCategorias($_POST['categories']);	
			}
			include_once 'Views/view_Portada.php';
		}	
		else
		{
			$datos = todos();
		}
		return $datos;
	}
	function busquedaNombre($nombre)
	{
		require_once 'Model/model_Articulo.php';	
		$datos = Articulo::datosBuscados($nombre);
		return $datos;
		//escribirDatos($datos);
	}
	function busquedaCategorias($idCategoria)
	{
		require_once 'Model/model_Articulo.php';
		$datos = Articulo::articulosPorCategoria($idCategoria);
		return $datos;
		//escribirDatos($datos);
	}
	function todos()
	{
		require_once 'Model/model_Articulo.php';
		$datos = Articulo::datos();
		return $datos;
		//escribirDatos($datos);
	}
	/*function escribirDatos($datos)
	{
		foreach ($datos as $key => $value) 
		{?>
			<p><a target="_blank" href="<?php echo $value['Link']; ?>"><?php echo $value['Nombre']; ?></a></p><?php
		}
	}*/
	function listaCategorias()
	{
		require_once 'Model/model_Categoria.php';
		$categorias = Categoria::listaCategorias();
		foreach ($categorias as $key => $value)
		{?>
			<li>
				<input type="radio" name="categories" value="<?php echo $value['ID']; ?>" id="cat<?php echo $key; ?>" onchange="document.categorias.submit()">
				<label for="cat<?php echo $key ?>"><?php echo utf8_encode($value['Nombre']); ?></label>
			</li><?php
		}
	}
	if(!isset($_POST['categories']))
	{
		include_once 'Views/view_Portada.php';		
	}
	else
	{
		datos();
	}
?>