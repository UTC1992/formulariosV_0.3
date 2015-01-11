
@include('includes.header')
<div>
    <ul class="breadcrumb">
        <li>
            <a href="admin">Inicio</a>
        </li>
        <li>
            <a href="admin">Administración</a>
        </li>
    </ul>
</div>
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well">
                <h2><i class="glyphicon glyphicon-info-sign"></i> Introducción</h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                </div>
            </div>
            <div class="box-content row">
                <div class="col-lg-7 col-md-12">
                    <p>Bienvenido a la adinistración del test de usabilidad</p>

                </div>

            </div>
        </div>
    </div>
</div>

<!-- Inicio Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Registrar Usuario</h4>
      </div>
      <div class="modal-body">
            
            <!--formulario inicio-->
        
            <div class="row">
            <form class="form-horizontal">
                
                <div class="form-group">
                    <label class="col-sm-4 control-label" for="formGroup">
                        Cédula:
                    </label>
                    <div class="col-sm-3">
                        <input class="form-control" type="text" id="formGroup" placeholder="Cédula">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-4 control-label" for="formGroup">
                        Nombres:
                    </label>
                    <div class="col-sm-6">
                        <input class="form-control" type="text" id="formGroup" placeholder="Nombre">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-4 control-label" for="formGroup">
                        Apellidos:
                    </label>
                    <div class="col-sm-6">
                        <input class="form-control" type="text" id="formGroup" placeholder="Apellido">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-4 control-label" for="formGroup">
                        Nivel Académico:
                    </label>
                    <div class="col-sm-3">
                        <select class="form-control">
                            <option>Ninguno</option>
                            <option>Primero</option>
                            <option>Segundo</option>
                            <option>Tercer</option>
                        </select>
                    </div>
                </div>
    <!--formulario fin-->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary btn-ln" type="submit">
                <span class="glyphicon glyphicon-floppy-saved"></span>
                            Guardar
        </button>
        <a href="#"><button type="button" class="btn btn-default btn-ln" data-dismiss="modal">
                <span class="glyphicon glyphicon-remove-circle"></span>
                            Cancelar
        </button>
        </a>

      </div>
    </div>
  </div>
</div>
<!-- End Modal -->


    <!--/span-->
</div><!--/row-->
@include('includes.footer')

    