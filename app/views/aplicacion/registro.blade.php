@if(Auth::check())
@include('includes.header')
            
            <!--formulario inicio-->
        <center>

        <h1>¿A qué aplicación web desea realizar el test?</h1>
        <div class="well">
            <div class="row">
            <form class="form-horizontal" action="registrarAplicacion" method="post">

                <div class="form-group">
                    <label class="col-sm-4 control-label" for="formGroup">
                        Nombre:
                    </label>
                    <div class="col-sm-4">
                        <input class="form-control" type="text" id="formGroup" name = "nombre" placeholder="Nombre App" requered autofocus required="">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-4 control-label" for="formGroup">
                        Tipo:
                    </label>
                    <div class="col-sm-3">
                        <input class="form-control" type="text" value="Web" id="formGroup" name="tipo" readonly="readonly">
                    </div>
                </div>
                
                <!--se optiene el id del administrador par ingresarlo luego en la tabla test en la BD-->
                <input id="userAdmin" type="hidden" name="userAdmin" class="input-block-level" value="{{Auth::user()->id}}" >
 <!--formulario fin-->
    
    </div>
      <div class="modal-footer">
        <center>
        <button class="btn btn-primary btn-ln" type="submit">
                <span class="glyphicon glyphicon-floppy-saved"></span>
                            Guardar
        </button>
        <a href="aplicaciones"><button type="button" class="btn btn-default btn-ln">
                <span class="glyphicon glyphicon-remove-circle"></span>
                            Cancelar
        </button>
        </a>
        </center>
      </div>
    </div>
    </center>

@include('includes.footer')
@endif