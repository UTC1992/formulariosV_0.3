@if(Auth::check())
@include('includes.header')
            
            <!--formulario inicio-->
        <center>

        <h1>Formulario de Usabilidad</h1>

        </center>
        <div class="well">
            <div class="row">
            <form class="form-horizontal" action="registrarForm" method="post">

                <div class="form-group">
                    <label class="col-sm-4 control-label" for="formGroup">
                        Nombre:
                    </label>
                    <div class="col-sm-3">
                        <input class="form-control" type="text" id="formGroup" name = "nombre" value="Test de Usabilidad" readonly="readonly" placeholder="Nombre" >
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-4 control-label" for="formGroup">
                        Indicaciones:
                    </label>
                    <div class="col-sm-4">
                        <textarea class="form-control" id="formGroup" name="indicaciones" placeholder="Indicaciones" required autofocus></textarea>
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
        <a href="formularios"><button type="button" class="btn btn-default btn-ln">
                <span class="glyphicon glyphicon-remove-circle"></span>
                            Cancelar
        </button>
        </a>
      </div>
    </div>
    </center>

@include('includes.footer')
@endif