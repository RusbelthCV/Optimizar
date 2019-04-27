<!DOCTYPE html>
<html>
<head>
	<title>WikiFit</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="Views/css/portada.css">
</head>
<body>
	<div id="container">
		<?php include 'header.php'; ?>
		<article>
			<div id="seccionCategorias">
				<h2>Categorías</h2>
				<form action="./index.php" method="POST" name="categorias" id="categorias">
					<ul>
						<?php listaCategorias(); ?>
						<li>
							<input type="radio" name="categories" value = "todos" id="todo" onchange="document.categorias.submit()">
							<label for="todo">Todos</label>
						</li>
					</ul>
				</form>
			</div>
		</article>
		<main>
			<div id="content">
				<?php $articulos = datos();
				foreach($articulos as $key => $value) 
				{?>
					<p>
						<a target="_blank" href="<?php echo $value['Link']; ?>">
							<img src="https://img.icons8.com/color/48/000000/pdf.png" >
						</a>
						<a class="nombre" target="_blank" href="<?php echo $value['Link']; ?>"><?php echo $value['Nombre']; ?></a>
					</p><?php
				} ?>
			</div>
		</main>
	</div>
</body>
</html>	