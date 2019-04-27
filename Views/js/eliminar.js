function borrar(id)
{
	var borrar = confirm("Desea borrar esta categoría?");

	if(borrar)
	{
		location.href = "../Controller/controller_Borrar.php?id="+id;
	}
	else
	{
		location.href = "../Controller/controller_ModificarCategoria.php";
	}
}