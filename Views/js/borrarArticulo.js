function borrar(id)
{
	var option = confirm("Deseas borrar este artículo?");	
	if(option)
	{
		location.href = "../Controller/controller_BorrarArticulo.php?id="+id;
	}
	else
	{
		location.href = "../Controller/controller_ListaArticulos.php";
	}
}