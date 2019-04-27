<?php  
	session_start();
	if(!isset($_SESSION['admin']))
	{
		header("Location:controller_Admin.php");
	}
	else
	{
		require_once '../Model/model_Articulo.php';
		function datosArticulos()
		{
			if(isset($_POST['buscar']))
			{
				$busqueda = $_POST['buscar'];
				$arrayDatos = Articulo::datosBuscados($busqueda);
			}
			else
			{
				$arrayDatos = Articulo::datos();	
			}
			
			for($i = 0;$i < count($arrayDatos);$i++)
			{?>
				<tr>
					<th><a href="controller_Modificar.php?id=<?php echo $arrayDatos[$i]['ID'] ?>">Modificar</a></th>
					<th onclick="borrar(<?php echo $arrayDatos[$i]['ID'] ?>);">Eliminar</th>
					<td><?php echo $arrayDatos[$i]['ID']; ?></td>
					<td><?php echo nombreCategoria($arrayDatos[$i]['Categoria']); ?></td>
					<td><?php echo utf8_encode($arrayDatos[$i]['Nombre']); ?></td>
					<td><?php echo $arrayDatos[$i]['Link']; ?></td>
				</tr> <?php
			}
		}
		function nombreCategoria($id)
		{
			require_once '../Model/model_Categoria.php';
			$nombre = Categoria::nombre($id);
			echo utf8_encode($nombre['Nombre']);
		}
		include_once '../Views/view_ListaArticulos.php';
	}

?>