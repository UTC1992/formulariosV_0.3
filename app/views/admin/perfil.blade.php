@include('includes.header')
	
	@include('includes.styles')	
	<style type="text/css">
		#tel{
			margin-right: 16px;
		}
	</style>
</head>
<body>
	<div >
		<div class="row">
			<div class="col-xs-12">
				<center>
				<h3>Datos del Administrador</h3>
				</center>
			</div>
			<br><br><br><br>
			
			<?php //echo $errors->first('email'); ?>
			
			@if($user)
			<form  class="form-horizontal" action="registrarAdmin" method="post">

				<div class="form-group">
					<label class="col-sm-3 control-label" for="formGroup">
						Cédula:
					</label>
					<div class="col-sm-2">
						<input class="form-control" type="text" name="cedula" id="formGroup" value="{{$user->cedula}}" placeholder="Tu Cédula" disabled>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label" for="formGroup">
						Nombres:
					</label>
					<div class="col-sm-4">
						<input class="form-control" type="text" name="nombres" id="formGroup" value="{{$user->nombres}}" placeholder="Tus Nombres" disabled>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label" for="formGroup">
						Apellidos:
					</label>
					<div class="col-sm-4">
						<input class="form-control" type="text" name="apellidos" id="formGroup" value="{{$user->apellidos}}" placeholder="Tus Apellidos" disabled>
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-sm-3 control-label" for="formGroup" id="tel">
						Teléfono:
					</label>
					<div class="input-group col-sm-2">
						<span class="input-group-addon"><span class="glyphicon glyphicon-phone"></span></span>
						<input class="form-control" type="text" name="telefono" id="formGroup" value="{{$user->telefono}}" placeholder="Tu Teléfono" disabled>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label" for="formGroup" id="tel">
						Email:
					</label>
					<div class="input-group col-sm-3">
						<span class="input-group-addon">@</span>
						<input class="form-control" type="email" name="email" id="formGroup" value="{{$user->email}}" placeholder="Tu Email" disabled>
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
					<div class="col-sm-4">
						<input class="form-control"  name="direccion" value="{{$user->direccion}}" placeholder="Tu Dirección" disabled>
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-sm-3 control-label" for="formGroup">
						Alias:
					</label>
					<div class="col-sm-2">
						<input class="form-control" type="text" name="username" id="formGroup" value="{{$user->username}}" placeholder="Tu username" disabled>
						<span class="help-block">Este nombre será utilizado para ingresar a tu cuenta.</span>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label" for="formGroup">
					</label>
					<div class="col-sm-6">
						<a href="#" class="btn btn-success btn-lg" type="button">
							<span class="glyphicon glyphicon-floppy-saved"></span>
							Editar
						</a>
						<a  href="index_admin" class="btn btn-danger btn-lg" type="button">
							<span class="glyphicon glyphicon-remove-circle"></span>
							Cancelar
						</a>
					</div>
				</div>
			</form>
		</div>
	</div>
	@endif
@include('includes.footer')