<!DOCTYPE html>
<html>
<head>
	<title>Administrador</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../Views/css/admin.css">
</head>
<body>
	<div id="containerAdmin">
		<header>
			<div id="logo">
				<img id="logoSvg" src="../Views/img/fit.svg">
			</div>		
		</header>
		<nav>
			<ul>
				<li>
					<a href="controller_AgregarCategoria.php">Agregar Categoría</a>
				</li>
				<li>
					<a href="controller_ModificarCategoria.php">Editar/Borrar Categoría</a>
				</li>
				<li>
					<a href="controller_AgregarArticulo.php">Agregar artículo</a>
				</li>
				<li>
					<a href="controller_ListaArticulos.php">Editar/borrar artículo</a>
				</li>
				<li>
					<a href="controller_portada.php">Logout</a>
				</li>
			</ul>
		</nav>
		<div id="formAdmin">
			<form action="controller_Admin.php" method="POST">
				<div id="group">
					<label for="usu">Usuario</label>
					<input type="text" name="usuario" id="usu">
					<label for="pass">Password</label>
					<input type="password" name="password" id="pass">
					<input type="submit" name="enviar" value="Entrar">
				</div>
			</form>
		</div>
	</div>
</body>
</html>