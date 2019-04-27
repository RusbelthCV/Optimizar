<!DOCTYPE html>
<html lang="es">
<head>
	<title>Modifica Artículo</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../Views/css/modificarArticulo.css">
	<meta charset="utf-8">
</head>
<body>
	<div id="container">
		<form action="controller_Modificar.php?id=<?php echo $_GET['id']; ?>" method="POST">
			<label for="nombre">Nombre</label>
			<input type="text" name="nombre" id="nombre" value="<?php echo $dato['Nombre']; ?>">
			<label for="link">Link</label>
			<input type="text" name="link" id="link" value="<?php echo $dato['Link']; ?>">
			<select name="categoria">
				<?php categorias(); ?>
			</select>
			<input type="submit" name="enviar" value="Modificar">
			<a href="controller_ListaArticulos.php">Volver al home</a>
		</form>
	</div>
</body>
</html>