<!DOCTYPE html>
<html>
<head>
	<title>Agregar Artículo</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../Views/css/agregarArticulo.css">
</head>
<body>
	<div id="container">		
		<form action="../Controller/controller_AgregarArticulo.php" method="POST">
			<div id="groupForm">
				
				<label for="nombreArt">Nombre</label>
				<input type="text" name="nombre" id="nombreArt">
				<label for="url">Link PDF</label>
				<input type="text" name="link" id="url">
				<select name="categoria">
					<option disabled selected value="">Selecciona una categoria</option>
					<?php echo rellenarSelect(); ?>
				</select>
				<input type="submit" name="enviar" value="Agregar">
				<a href="controller_Admin.php" id="back">Volver al menú admin</a>
				<?php echo $_sMensaje; ?>
			</div>
		</form>
	</div>
</body>
</html>