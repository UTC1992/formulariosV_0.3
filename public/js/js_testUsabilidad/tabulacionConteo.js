function contarRespuestas() 
{
	var numAmbito1 = document.getElementById("ambito-1").innerHTML;
	var numAmbito2 = document.getElementById("ambito-2").innerHTML;
	var numAmbito3 = document.getElementById("ambito-3").innerHTML;
	var numAmbito4 = document.getElementById("ambito-4").innerHTML;
	var numAmbito5 = document.getElementById("ambito-5").innerHTML;
	var numAmbito6 = document.getElementById("ambito-6").innerHTML;
	var numAmbito7 = document.getElementById("ambito-7").innerHTML;
	var numAmbito8 = document.getElementById("ambito-8").innerHTML;
	var numAmbito9 = document.getElementById("ambito-9").innerHTML;
	
	//alert(numAmbito1);

	var respAmbito1 = document.getElementById("resAmbito-1").innerHTML;
	var respAmbito2 = document.getElementById("resAmbito-2").innerHTML;
	var respAmbito3 = document.getElementById("resAmbito-3").innerHTML;
	var respAmbito4 = document.getElementById("resAmbito-4").innerHTML;
	var respAmbito5 = document.getElementById("resAmbito-5").innerHTML;
	var respAmbito6 = document.getElementById("resAmbito-6").innerHTML;
	var respAmbito7 = document.getElementById("resAmbito-7").innerHTML;
	var respAmbito8 = document.getElementById("resAmbito-8").innerHTML;
	var respAmbito9 = document.getElementById("resAmbito-9").innerHTML;
	
	var tarea1 = document.getElementsByName("tarea1");
	//alert(tareaP.[0]);
	//alert(tarea1);

	for(var i=0;i<tarea1.length;i++)
	    if(tarea1[i].checked) 
			var resp1 = tarea1[i].value;
			alert(resp1); 
			document.getElementById("resAmbito-1").innerHTML=resp1;
	
}