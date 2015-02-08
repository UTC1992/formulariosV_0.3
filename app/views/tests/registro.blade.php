@if(Auth::check())
@include('includes.header')
            
            <!--formulario inicio-->
        <center>

        <h1>Crear Test</h1>
        <div class="well">
            <div class="row">
            <form class="form-horizontal" action="crearTest" method="post">

                <div class="form-group">
                    <label class="col-sm-4 control-label" for="formGroup">
                        Creado por:
                    </label>
                    <div class="col-sm-6">
                        <input class="form-control" type="text" id="formGroup" name = "evaluador" placeholder="Cédula" value="{{Auth::user()->nombres}} {{Auth::user()->apellidos}}" disabled>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-4 control-label" for="formGroup">
                        Fecha creación:
                    </label>
                    <div class="col-sm-6">
                        <input class="form-control" type="text" id="formGroup" name ="fecha_creacion" placeholder="Nombres" value="<?php $fecha=time();?>{{(date( "Y - n - j" , $fecha ))}}" disabled>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-4 control-label" for="formGroup">
                        Estado:
                    </label>
                    <div class="col-sm-6">
                        <select class="form-control" name = "estado">
                            <option>Abierto</option>
                            <option>Cerrado</option>
                        </select>
                    </div>
                </div>
                <input id="userAdmin" type="hidden" name="userAdmin" class="input-block-level" value="{{Auth::user()->id}}" >
            </div>
    <!--formulario fin-->
    
    </div>
      <div class="modal-footer">
        <center>
        <button class="btn btn-primary btn-ln" type="submit">
                <span class="glyphicon glyphicon-floppy-saved"></span>
                            Siguiente
        </button>
        <a href="tests"><button type="button" class="btn btn-default btn-ln" data-dismiss="modal">
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