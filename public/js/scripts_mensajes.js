$(document).ready(function()
{
	$('.delete').click(function()
	{
		if (confirm("¿ Esta seguro que desea eliminar al partisipante. ?")) {
			var id = $(this).attr('title');
			document.location.href="eliminarPartisipante/"+id;
		};
	});
});