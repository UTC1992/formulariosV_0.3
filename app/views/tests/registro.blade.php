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
                    <div class="col-sm-3">
                        <input class="form-control" type="text" id="formGroup" name = "evaluador" placeholder="Cédula" value="{{Auth::user()->nombres}} {{Auth::user()->apellidos}}" disabled>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-4 control-label" for="formGroup">
                        Fecha de creación:
                    </label>
                    <div class="col-sm-2">
                        <input class="form-control" type="text" id="formGroup" name ="fecha_creacion" placeholder="Nombres" value="<?php $fecha=time();?>{{(date( "Y - n - j" , $fecha ))}}" disabled>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-4 control-label" for="formGroup">
                        Estado:
                    </label>
                    <div class="col-sm-2">
                        <select class="form-control" name = "estado">
                            <option>Abierto</option>
                            <option>Cerrado</option>
                        </select>
                    </div>
                </div>
                <?php  $apps = DB::table('aplicaciones')->where('users_id',Auth::user()->id)->get();?>
                <div class="form-group">
                    <label class="col-sm-4 control-label" for="formGroup">
                        Aplicación:
                    </label>
                    <div class="col-sm-3">
                        <select class="form-control" name = "aplicacion">
                            <option>Ninguna</option>
                        @foreach($apps as $app)
                            <option>{{$app->nombre}}</option>
                        @endforeach
                        </select>
                    </div>
                </div>
                
                <?php  $forms = DB::table('formularios')->get();?>
                <div class="form-group">
                    <label class="col-sm-4 control-label" for="formGroup">
                        Formularios:
                    </label>
                    <div class="col-sm-3">
                        <select class="form-control" name = "formulario">
                            <option>Ninguno</option>
                        @foreach($forms as $form)
                            <option>{{$form->nombre}}</option>
                        @endforeach
                        </select>
                    </div>
                </div>
                <!--se optiene el id del administrador par ingresarlo luego en la tabla test en la BD-->
                <input id="userAdmin" type="hidden" name="userAdmin" class="input-block-level" value="{{Auth::user()->id}}" >
            </div>
    <!--formulario fin-->
    
    </div>
      <div class="modal-footer">
        <center>
        <button class="btn btn-primary btn-ln" type="submit">
                <span class="glyphicon glyphicon-floppy-saved"></span>
                            Guardar
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