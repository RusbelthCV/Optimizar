<?php  

	/**
	 * 
	 */
	class Admin 
	{
		function __construct()
		{}
		public static function comprobarAdmin($_sUsuario,$_sPassword)
		{
			require_once 'conexion.php';
			$consulta = "SELECT count(*) FROM admin WHERE nombre LIKE '$_sUsuario' AND password LIKE '$_sPassword'";
			try
			{
				$ejecutar = $pdo->prepare($consulta);
				$ejecutar->execute();
				$existencias = $ejecutar->fetchColumn();
				return $existencias;
			}
			catch(PDOException $ex)
			{
				echo $ex->getMessage();
			}
			echo $consulta;
		}
	}


?>