function validarRegistro()
{
	var cedula = document.getElementById('cedula').value;
	if (cedula.length == 0) 
		{
			alert('Ingrese su cédula')
		};


	var nombre = document.getElementById('nombres').value;
	if (nombre.length ==0)
	{
		alert('Ingrese su nombre')
	}
}