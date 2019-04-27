<?php  
	session_start();
	if(!isset($_SESSION['admin']))
	{
		header("Location:controller_Admin.php");
	}
	else
	{
		require_once '../Model/model_Categoria.php';
		function listaCategorias()
		{
			if(isset($_POST['buscar']))
			{
				$busqueda = $_POST['buscar'];
				$_aCategorias = Categoria::listaCategoriasBuscadas($busqueda);
			}
			else
			{
				$_aCategorias = Categoria::listaCategorias();
			}
			for($i = 0;$i < count($_aCategorias);$i++)
			{?>
				<tr>
					<th><a href="controller_DetallesCategoria.php?id=<?php echo $_aCategorias[$i]['ID']; ?>">Modificar</a></th>
					<th onclick="borrar(<?php echo $_aCategorias[$i]['ID'] ?>)">Borrar</th>
					<td>
						<?php echo $_aCategorias[$i]['ID']; ?>
					</td>
					<td>
						<?php echo utf8_encode($_aCategorias[$i]['Nombre']); ?>
					</td>
				</tr>
				<?php
			}
		}
		include_once '../Views/view_ModificarCategoria.php';	
	}
?>