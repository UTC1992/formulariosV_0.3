@if(Auth::check())
@include('includes.header')
            
            <!--formulario inicio-->
        <center>

        <h1>Registrar participantes</h1>
        <div class="well">
            <div class="row">
            <form class="form-horizontal" action="registrarPartisipantes" method="post">

                <div class="form-group">
                    <label class="col-sm-4 control-label" for="formGroup">
                        Cédula:
                    </label>
                    <div class="col-sm-3">
                        <input class="form-control" type="text" id="formGroup" name = "cedula" placeholder="Cédula" requered autofocus>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-4 control-label" for="formGroup">
                        Nombres:
                    </label>
                    <div class="col-sm-4">
                        <input class="form-control" type="text" id="formGroup" name ="nombres" placeholder="Nombres">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-4 control-label" for="formGroup">
                        Apellidos:
                    </label>
                    <div class="col-sm-4">
                        <input class="form-control" type="text" id="formGroup" name = "apellidos" placeholder="Apellidos">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-4 control-label" for="formGroup">
                        Nivel Académico:
                    </label>
                    <div class="col-sm-3">
                        <select class="form-control" name = "nivelAcademico">
                            <option>Ninguno</option>
                            <option>Primero</option>
                            <option>Segundo</option>
                            <option>Tercer</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-4 control-label" for="formGroup">
                        Profesión:
                    </label>
                    <div class="col-sm-4">
                        <input class="form-control" type="text" id="formGroup" name = "profesion" placeholder="Profesión">
                    </div>
                </div>
                <?php $tests = DB::table('tests')->where('users_id',Auth::user()->id)->get(); 
                ?>
                <div class="form-group">
                    <label class="col-sm-4 control-label" for="formGroup">
                        Probara la aplicación:
                    </label>
                    <div class="col-sm-3">
                        <select class="form-control" name = "aplicacion">
                            <option>Ninguna</option>
                            @if($tests)
                            @foreach($tests as $test)
                                
                                <?php $apps = DB::table('aplicaciones')->where('id',$test->app_id)->first(); ?>
                                <option>{{$apps->nombre}}</option>
                            @endforeach 
                            @else
                                <option>Ninguna</option>
                            @endif
                        </select>
                    </div>
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
        <a href="partisipantes"><button type="button" class="btn btn-default btn-ln" data-dismiss="modal">
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