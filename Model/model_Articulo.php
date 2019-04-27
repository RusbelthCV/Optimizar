<?php  

	/**
	 * 
	 */
	class Articulo
	{
		private $nombre;
		private $link;
		private $categoria;
		function __construct($nombre,$link,$categoria)
		{
			$this->nombre = utf8_decode($nombre);
			$this->link = $link;
			$this->categoria = $categoria;
		}
		function insertarArticulo()
		{
			require_once 'conexion.php';
			$consulta = "INSERT INTO articulo(Categoria,Nombre,Link) VALUES(?,?,?)";
			$ejecutar = $pdo->prepare($consulta);
			$ejecutar->execute(array($this->categoria,$this->nombre,$this->link));
			return $ejecutar;
		}
		public static function datos()
		{
			include 'conexion.php';
			$consulta = "SELECT * FROM articulo";
			$ejecutar = $pdo->prepare($consulta);
			$ejecutar->execute();
			$arrayDatos = $ejecutar->fetchAll(PDO::FETCH_ASSOC);
			return $arrayDatos;
		}
		public static function datosId($id)
		{
			include 'conexion.php';
			$consulta = "SELECT * FROM articulo WHERE ID = $id";
			$ejecutar = $pdo->prepare($consulta);
			$ejecutar->execute();
			$datos = $ejecutar->fetch(PDO::FETCH_ASSOC);
			return $datos;
		}
		public static function updateArticulo($id,$nombre,$link,$categoria)
		{
			include 'conexion.php';
			$consulta = "UPDATE articulo SET Categoria = $categoria, Nombre = '$nombre', Link = '$link' WHERE ID = $id";
			try
			{

				$ejecutar = $pdo->prepare($consulta);
				$ejecutar = $ejecutar->execute();
			}
			catch(PDOException $ex)
			{
				echo $ex->getMessage();
			}
		}
		public static function deleteArticulo($id)
		{
			require_once 'conexion.php';
			$consulta = "DELETE FROM articulo WHERE ID = $id";
			try
			{
				$ejecutar = $pdo->prepare($consulta);
				$ejecutar->execute();
			}
			catch(PDOException $ex)
			{
				echo $ex->getMessage();
			}
		}
		public static function datosBuscados($busqueda)
		{
			include 'conexion.php';
			$consulta = "SELECT * FROM articulo WHERE Nombre LIKE '%$busqueda%'";
			try
			{
				$ejecutar = $pdo->prepare($consulta);
				$ejecutar->execute();
				$datos = $ejecutar->fetchAll(PDO::FETCH_ASSOC);
			}
			catch(PDOException $ex)
			{
				echo $ex->getMessage();
			}
			return $datos;
		}
		public static function articulosPorCategoria($idCategoria)
		{
			include 'conexion.php';
			$consulta = "SELECT * FROM articulo WHERE Categoria = $idCategoria";
			try
			{
				$ejecutar = $pdo->prepare($consulta);
				$ejecutar->execute();
				$datos = $ejecutar->fetchAll(PDO::FETCH_ASSOC);
				return $datos;
			}
			catch(PDOException $ex)
			{
				echo $ex->getMessage();
			}
		}
	}

?>