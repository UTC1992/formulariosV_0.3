// Función para recoger los datos de PHP según el navegador, se usa siempre.
function objetoAjax(){
	var xmlhttp=false;
	try {
		xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
	} catch (e) {
 
	try {
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	} catch (E) {
		xmlhttp = false;
	}
}
 
if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
	  xmlhttp = new XMLHttpRequest();
	}
	return xmlhttp;
}

//Función para recoger los datos del formulario y enviarlos por post  
function registrar2()
{	 
		alert('hola registrando');
		//instanciamos el objetoAjax
		ajax=objetoAjax();
			
		var ambito = document.getElementById("ambito-1").innerHTML;

		//uso del medotod POST
		//archivo que realizará la operacion

	  	alert("ambitos "+ambito);

	  	//cuando el objeto XMLHttpRequest cambia de estado, la función se inicia
		//ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
		//enviando los valores a registro.php para que inserte los datos
	
		for (var i = 1; i <= ambito; i++) 
		{
			ajax.open("POST", "respuestas/detalle_tarea/create",true);
			var tarea = document.getElementsByName("tarea"+i);
			//alert("tarea "+tarea);
			var tarea_id = document.getElementById("tarea_id"+i).value;
			//alert("tarea id "+tarea_id);
			
			for(var j = 0 ;j < tarea.length; j++)
			{
			    if(tarea[j].checked)
			    {
			    	var resp = tarea[j].value;
			    	alert("respuesta "+resp);
			    	//ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
					ajax.send("respuesta="+resp);
			    }
			};
					
		};
		
}