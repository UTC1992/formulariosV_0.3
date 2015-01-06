<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	
	<style type="text/css">
		#tel{
			margin-right: 16px;
		}
	</style>
</head>
<body>
	<div class="container well">
		<div class="row">
			<div class="col-xs-12">
				<h2>Test de Usuario</h2>
			</div>
			<br><br>
			<form class="form-horizontal">

				<div class="form-group">
					<label class="col-sm-2 control-label" for="formGroup">
						Nombre de Usuario
					</label>
					<div class="col-sm-2">
						<input class="form-control" type="text" id="formGroup" value="Omar" disabled>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label" for="formGroup">
						Nombre:
					</label>
					<div class="col-sm-4">
						<input class="form-control" type="text" id="formGroup" placeholder="Tu nombre">
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label" for="formGroup">
						Apellido:
					</label>
					<div class="col-sm-4">
						<input class="form-control" type="text" id="formGroup" placeholder="Tu apellido">
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-sm-2 control-label" for="formGroup" id="tel">
						Teléfono:
					</label>
					<div class="input-group col-sm-2">
						<span class="input-group-addon"><span class="glyphicon glyphicon-phone"></span></span>
						<input class="form-control" type="text" id="formGroup" placeholder="Tu teléfono">
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label" for="formGroup" id="tel">
						Email:
					</label>
					<div class="input-group col-sm-2">
						<span class="input-group-addon">@</span>
						<input class="form-control" type="text" id="formGroup" placeholder="Tu email">
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label" for="formGroup">
						Información Biográfica:
					</label>
					<div class="col-sm-4">
						<textarea class="form-control" rowa="4"></textarea>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label" for="formGroup">
						Estado:
					</label>
					<div class="col-sm-4">
						<select class="form-control">
							<option>En línea</option>
							<option>Ocupado</option>
							<option>Ausente</option>
							<option>Desconectado</option>
						</select>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label" for="formGroup">
						Alias:
					</label>
					<div class="col-sm-4">
						<input class="form-control" type="text" id="formGroup" placeholder="Tu nickname">
						<span class="help-block">Este nombre será mostrado a los usuarios, ocultando el verdadero nombre.</span>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label" for="formGroup">
						Cuenta:
					</label>
					<div class="col-sm-4">
						<label class="radio-inline">
							<input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" checked>
						Activar
						</label>
						<label class="radio-inline">
							<input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2" checked>
						Desactivar
						</label>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label" for="formGroup">
						Mostrar Información:
					</label>
					<div class="col-sm-4">
						<label class="checkbox-inline">
							<input type="checkbox" id="inlineCheckbox1" value="option1" checked disabled>
						Nombre
						</label>
						<label class="checkbox-inline">
							<input type="checkbox" id="inlineCheckbox2" value="option2">
						Biográfia
						</label>
						<label class="checkbox-inline">
							<input type="checkbox" id="inlineCheckbox3" value="option3">
						Teléfono
						</label>
					</div>
				</div>
				<br />

				<div class="form-group">
					<label class="col-sm-2 control-label" for="formGroup">
					</label>
					<div class="col-sm-4">
						<button class="btn btn-success btn-lg" type="submit">
							<span class="glyphicon glyphicon-floppy-saved"></span>
							Guardar
						</button>
						<button class="btn btn-danger btn-lg" type="button">
							<span class="glyphicon glyphicon-remove-circle"></span>
							Cancelar
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>
	

	<script type="js/jquery-1.11.1.min.js"></script>
	<script type="js/bootstrap.js"></script>
</body>
</html>