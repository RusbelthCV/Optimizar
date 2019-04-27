<!DOCTYPE html>
<html>
<head>
	<title>Detalle Categoria</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../Views/css/agregarCategoria.css">
</head>
<body>
	<div id="container">
		<h3>Modificar Categoría</h3>
		<form action="controller_Update.php?id=<?php echo $datos['ID'] ?>" method="POST">
			<label for="nombre">Nombre de la categoría:</label>
			<input type="text" name="nombre" id="nombre" value="<?php echo utf8_encode($datos['Nombre']); ?>">
			<p>El nombre no puede quedar vacío</p>
			<input type="submit" name="enviar" value="Modificar" id="submit">
			<a href="controller_Admin.php">Volver al menú Admin</a>
		</form>
	</div>
</body>
</html>