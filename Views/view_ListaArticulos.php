<!DOCTYPE html>
<html>
<head>
	<title>Lista Artículos</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../Views/css/listaArticulos.css">
	<script type="text/javascript" src="../Views/js/borrarArticulo.js"></script>
</head>
<body>
	<div id="container">
		<div id="buscador">
			<form action="controller_ListaArticulos.php" method="POST">
				<label for="busca">Nombre a buscar: </label>
				<input type="text" name="buscar" id="busca">
				<input type="submit" name="enviar" value="buscar">
			</form>
		</div>
		<table>
			<tr>
				<th></th>
				<th></th>
				<th>ID</th>
				<th>Categoria</th>
				<th>Nombre</th>
				<th>link</th>
			</tr>
			<?php echo datosArticulos(); ?>
		</table>
		<a href="controller_Admin.php" id="back">Volver al menú admin</a>
	</div>
</body>	
</html>