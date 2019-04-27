<?php  
	session_start();
	if(isset($_SESSION['admin']))
	{
		include_once '../Views/view_Admin.php';
	}
	else
	{
		include_once '../Views/view_Admin.php';	
		?>
			<script type="text/javascript">
				var pantallaGris = document.createElement("div");
				var formulario = document.getElementById("formAdmin");
				formulario.style.display = "block";
				pantallaGris.setAttribute("id","popup");
				document.getElementById("containerAdmin").appendChild(pantallaGris);
			</script>
		<?php
		if(isset($_POST['enviar']))
		{
			require_once '../Model/model_Admin.php';
			$_sUsuario = $_POST['usuario'];
			$_sPassword = md5($_POST['password']);
			$admins = Admin::comprobarAdmin($_sUsuario,$_sPassword);
			if($admins == 1)
			{
				$_SESSION['admin'] = $_sUsuario;
			}
			else
			{}
			header("Location:controller_Admin.php");
		}
		else
		{}
	}
?>