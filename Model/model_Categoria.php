<?php  
	/**
	 * Clase que se encargará de todo en lo que se vea involucrado una o varias categorías
	 */
	class Categoria
	{
		private $nombre;
		function __construct($nombre)
		{
			$this->nombre = utf8_decode($nombre);
		}
		function insertarCategoria()
		{
			require_once 'conexion.php';
			$consultaInsert = "INSERT INTO categorias(Nombre) VALUES('$this->nombre')";
			try
			{
				$ejecutar = $pdo -> prepare($consultaInsert);
				$ejecutar -> execute();
			}
			catch(PDOException $ex)
			{
				echo $ex->getMessage();
			}	
		}
		public static function listaCategorias()
		{
			include 'conexion.php';
			$arrayCategorias = "SELECT * FROM categorias";
			try
			{
				$ejecutar = $pdo -> prepare($arrayCategorias);
				$ejecutar -> execute();
				$categorias = $ejecutar->fetchAll(PDO::FETCH_ASSOC);
			}
			catch(PDOException $ex)
			{
				echo $ex->getMessage();
			}
			return $categorias;
		}
		public static function borrarCategoria($id)
		{
			require_once 'conexion.php';
			$consulta = "DELETE FROM categorias WHERE ID = $id";
			$ejecutar = $pdo->prepare($consulta);
			$ejecutar->execute();
		}
		//Datos de una categoría según su ip,una única categoria
		public static function datosCategoria($id)
		{
			require_once 'conexion.php';
			$consulta = "SELECT * FROM categorias WHERE ID = $id";
			$ejecutar = $pdo->prepare($consulta);
			$ejecutar -> execute();
			$datos = $ejecutar->fetch(PDO::FETCH_ASSOC);
			return $datos;
		}
		public static function updateCategoria($id,$nuevoValor)
		{
			require_once 'conexion.php';
			$consulta = "UPDATE categorias SET Nombre = '$nuevoValor' WHERE ID = $id";
			$ejecutar = $pdo->prepare($consulta);
			$ejecutar -> execute();
		}
		public static function nombre($id)
		{
			include 'conexion.php';
			$consulta = "SELECT Nombre FROM categorias WHERE ID = $id";
			$ejecutar = $pdo->prepare($consulta);
			$ejecutar->execute();
			$nombre = $ejecutar->fetch(PDO::FETCH_ASSOC);
			return $nombre;
		}
		public static function listaCategoriasBuscadas($busqueda)
		{
			include 'conexion.php';
			$arrayCategorias = "SELECT * FROM categorias WHERE Nombre LIKE '%$busqueda%'";
			try
			{
				$ejecutar = $pdo -> prepare($arrayCategorias);
				$ejecutar -> execute();
				$categorias = $ejecutar->fetchAll(PDO::FETCH_ASSOC);
			}
			catch(PDOException $ex)
			{
				echo $ex->getMessage();
			}
			return $categorias;
		}
	}

?>