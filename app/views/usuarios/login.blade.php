<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	@include('includes.styles')
	<?php echo HTML::style('css/styles_pages.css'); ?>
	<!-- The fav icon -->
    <link rel="shortcut icon" href="img/Login.png">
</head>
<body>
	<div class="container well" id="sha">
		<div class="row">
			<div class="col-xs-12">
				<img src="{{asset('img/Login.png')}}" alt="" class="img-responsive" id="login">
			</div>
		</div>
		<form class="login" action="login_ingresoTest" method="POST">
			@if (Session::has('login_partisipante'))
			<p style="color:red">El numero de cedula es incorrecto.</p>
			@else
			<p>Introdusca su numero de cédula para continuar.</p>
			@endif
			<div class="form-group">
				<input type="text" class="form-control" placeholder="N° Cédula" name="cedula" id="cedula"  requered autofocus>
			</div>
			<button class="btn btn-lg btn-primary btn-block" type="submit">Iniciar Test</button>
			<div class="checkbox">
				<!--
				<label class="checkbox">
					<input type="checkbox" value="1" name="remember">No cerrar sesión
				</label>
				-->
				<br>
				<p><a href="<?=URL::to('/') ?>" style="font-size: 13pt;">Salir</a></p>
			</div>			
		</form>
		<?php echo HTML::script('js/jquery-1.11.1.min.js'); ?>
	</div>
</body>
</html>