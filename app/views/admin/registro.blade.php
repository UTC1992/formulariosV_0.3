<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	@include('includes.styles')	
	<style type="text/css">
		#tel{
			margin-right: 16px;
		}
	</style>
	<script type="text/javascript" src="js/validacionesTest/validacion_registroAdmin.js"></script>
</head>
<body>
	<div class="container well" id="registro_sha">
		<div class="row">
			<div class="col-xs-12">
				<center>
				<h3>Nueva Cuenta</h3>
				</center>
			</div>
			<br><br><br><br>
			
			<?php //echo $errors->first('email'); ?>

			<form  class="form-horizontal" action="registrarAdmin" method="post">

				<div class="form-group">
					<label class="col-sm-3 control-label" for="formGroup">
						Cédula:
					</label>
					<div class="col-sm-4">
						<input class="form-control" type="text" name="cedula" id="formGroup" placeholder="Tu Cédula" required="">
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label" for="formGroup">
						Nombres:
					</label>
					<div class="col-sm-6">
						<input class="form-control" type="text" name="nombres" id="formGroup" placeholder="Tus Nombres" required="">
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label" for="formGroup">
						Apellidos:
					</label>
					<div class="col-sm-6">
						<input class="form-control" type="text" name="apellidos" id="formGroup" placeholder="Tus Apellidos" required=" ">
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-sm-3 control-label" for="formGroup" id="tel" >
						Teléfono:
					</label>
					<div class="input-group col-sm-3">
						<span class="input-group-addon"><span class="glyphicon glyphicon-phone"></span></span>
						<input class="form-control" type="text" name="telefono" id="formGroup" placeholder="Tu Teléfono" required="">
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label" for="formGroup" id="tel">
						Email:
					</label>
					<div class="input-group col-sm-5">
						<span class="input-group-addon">@</span>
						<input class="form-control" type="email" name="email" id="formGroup" placeholder="Tu Email" required="">
					</div>
				</div>
				<!--
				<div class="form-group">
					<label class="col-sm-2 control-label" for="formGroup">
						Ciudad:
					</label>
					<div class="col-sm-4">
						<input class="form-control" type="text" id="formGroup" placeholder="Tu Ciudad">
					</div>
				</div>
				-->

				<div class="form-group">
					<label class="col-sm-3 control-label" for="formGroup">
						Dirección:
					</label>
					<div class="col-sm-6">
						<textarea class="form-control" name="direccion" rowa="4" placeholder="Tu Dirección" required=""></textarea>
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-sm-3 control-label" for="formGroup">
						Alias:
					</label>
					<div class="col-sm-4">
						<input class="form-control" type="text" name="username" id="formGroup" placeholder="Tu username" required="">
						<span class="help-block">Este nombre será utilizado para ingresar a tu cuenta.</span>
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-sm-3 control-label" for="formGroup">
						Password:
					</label>
					<div class="col-sm-4">
						<input class="form-control" type="password" name="password" id="formGroup" placeholder="Una Contraseña" required="">
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label" for="formGroup">
					</label>
					<div class="col-sm-6">
						<button class="btn btn-success btn-lg" type="submit" onclick="validarRegistro();">
							<span class="glyphicon glyphicon-floppy-saved"></span>
							Guardar
						</button>
						<a  href="/" class="btn btn-danger btn-lg" type="button">
							<span class="glyphicon glyphicon-remove-circle"></span>
							Cancelar
						</a>
					</div>
				</div>
			</form>
		</div>
	</div>
	

	<script type="js/jquery-1.11.1.min.js"></script>
	<script type="js/bootstrap.js"></script>
</body>
</html>