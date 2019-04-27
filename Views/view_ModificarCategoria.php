<!DOCTYPE html>
<html>
<head>
	<title>Editar/Modificar</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../Views/css/modificar.css">
	<script type="text/javascript" src="../Views/js/eliminar.js"></script>
</head>
<body>
	<div id="container">
		<div id="buscador">
			<form action="controller_ModificarCategoria.php" method="POST">
				<label for="busca">Categoría a buscar: </label>
				<input type="text" name="buscar" id="busca">
				<input type="submit" name="enviar" value="buscar">
			</form>
		</div>
		<table>
			<tr>
				<th></th>
				<th></th>
				<th>ID</th>
				<th>Nombre</th>
			</tr>
			<?php echo listaCategorias(); ?>
			<a class = "menu" href="controller_Admin.php">Volver al menú Admin</a>
		</table>
	</div>
</body>
</html>