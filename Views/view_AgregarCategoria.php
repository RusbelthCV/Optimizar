<!DOCTYPE html>
<html>
<head>
	<title>Agregar Categoría</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../Views/css/agregarCategoria.css">
	<script type="text/javascript" src="../Views/js/agregarCategoria.js"></script>
</head>
<body>
	<div id="container">
		<h3>Agregar Categoría</h3>
		<form action="controller_AgregarCategoria.php" method="POST" onsubmit="return validarFormulario()">
			<label for="nombre">Nombre de la categoría:</label>
			<input type="text" name="nombre" id="nombre">
			<p>El nombre no puede quedar vacío</p>
			<input type="submit" name="enviar" value="Agregar" id="submit">
			<a href="controller_Admin.php">Volver al menú Admin</a>
			<?php echo $mensaje; ?>
		</form>
	</div>
</body>
</html>