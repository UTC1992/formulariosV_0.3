@if(Auth::check())
@include('includes.header')
            
            <!--formulario inicio-->
        <center>

        <h1>Registro de Tareas</h1>
        <div class="well">
            <div class="row">
    <!--formulario inicio-->
            <form role="form" class="form-horizontal" action="crearTareas" method="post">

                <div class="form-group">
                    <label class="col-sm-3 control-label" for="formGroup">
                        Enunciado:
                    </label>
                    <div class="col-sm-6">
                        <textarea class="form-control" id="formGroup" name="enunciado" placeholder="Enunciado"></textarea>
                    </div>
                </div>
            
    <!--formulario fin-->
    
    </div>
      <div class="modal-footer">
        <center>
        <button class="btn btn-primary btn-ln" type="submit">
                <span class="glyphicon glyphicon-floppy-saved"></span>
                            Guardar
        </button>
        <a href="tareas"><button type="button" class="btn btn-default btn-ln">
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
