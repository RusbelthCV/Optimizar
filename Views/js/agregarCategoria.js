function validarFormulario()
{
	var inputNombre = document.getElementById("nombre").value;
	var etiquetaP = document.getElementsByTagName("p")[0];
	var continuar = false;
	if(inputNombre != "")
	{
		etiquetaP.style.display = "none";
		continuar = true;
	}
	else
	{
		etiquetaP.style.display = "block";
		continuar = false;
	}
	return continuar;
}