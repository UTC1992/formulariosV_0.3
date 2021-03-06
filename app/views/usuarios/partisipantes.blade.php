@if(Auth::check())
@include('includes.header')

    <div>
        <ul class="breadcrumb">
            <li>
                <a class="btn btn-primary btn-ln" href="index_admin">Inicio</a>
            </li>
            <li>
                <a class="btn btn-primary btn-ln" href="partisipantes">Participantes</a>
            </li>
            <li><a class="btn btn-primary btn-ln" href="registroUsuarios">
                            <i class="glyphicon glyphicon-plus"></i><span>Registrar</span></a>
                </li>
        </ul>
    </div>


    <div class="row">
    <div class="box col-md-12">

<!--mensaje de confirmacion de eliminacion de usuario-->
    <?php $status=Session::get('status'); ?>
    @if($status=='ok_create')
    <div class="alert alert-success fade in">
        <button class="close" data-dismiss="alert" type="button">x</button>
        <i class="fa fa-check-square"></i>El usuario a sido creado correctamente
    </div>
    @endif
    @if($status=='ok_delete')
    <div class="alert alert-success fade in">
        <button class="close" data-dismiss="alert" type="button">x</button>
        <i class="fa fa-check-square"></i>El usuario a sido eliminado correctamente
    </div>
    @endif
    @if($status=='ok_update')
    <div class="alert alert-info fade in">
        <button class="close" data-dismiss="alert" type="button">x</button>
        <i class="fa fa-check-square"></i>El usuario a sido actualizado  correctamente
    </div>
    @endif
<!--end mensaje de eliminacion-->
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
        <h2><i class="glyphicon glyphicon-user"></i>Participantes del Test</h2>

        <div class="box-icon">
            <a href="#" class="btn btn-minimize btn-round btn-default"><i
                    class="glyphicon glyphicon-chevron-up"></i></a>
        </div>
    </div>
    <div class="box-content">
    
    <!-- $partisipantes es una variable enviada desde del controlador con with-->
    <?php $tests = DB::table('tests')->where('users_id',Auth::user()->id)->get(); 
                ?>
    @if($tests)
    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>
    <tr>
        <th>ID</th>
        <th>Test App</th>
        <th>Cédula</th>
        <th>Usuario</th>
        <th>Nivel Académico</th>
        <th>Profesión</th>
        <th>Creación</th>
        <th>Operaciones</th>
    </tr>
    </thead>

    <tbody>
    <tr>
        
        <!--asignamos a un bucle de array $partisipantes a partisipant-->
        @foreach($tests as $test)
        <?php $partisipanteDatos = DB::table('partisipantes')->where('tests_id',$test->id)->get(); ?>
        @foreach($partisipanteDatos as $partisipanteDato)
        <td class="center">{{$partisipanteDato->id}}</td>
        <td class="center">N° 00{{$partisipanteDato->tests_id}}</td>
        <td class="center">{{$partisipanteDato->cedula}}</td>
        <td class="center">{{$partisipanteDato->nombres}}{{' '}}{{$partisipanteDato->apellidos}}</td>
        <td class="center">{{$partisipanteDato->nivel_academico}}</td>
        <td class="center">{{$partisipanteDato->profesion}}</td>
        <td class="center">{{$partisipanteDato->created_at}}</td>
        <!--<td class="center">
            <span class="label-success label label-default">Active</span>
        </td>
        -->
        <td class="center">
            <!--<a class="btn btn-success" href="#">
                <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                Mostrar
            </a>
            -->
            <!--
            <a class="btn btn-info" href="#" data-toggle="modal" data-target="#editModal">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                Editar
            </a>
            -->
            <button class="btn btn-info" href="#" >
                <i class="glyphicon glyphicon-edit icon-white"></i>
                {{HTML::link('#Edit','Editar',array('class'=>'edit','id'=>$partisipanteDato->id,'data-toggle'=>'modal','title'=>$partisipanteDato->nombres))}}
            </button>
            <a class="btn btn-danger" href="<?=URL::to('eliminarPartisipante'); ?>/{{$partisipanteDato->id}}">
                <i class="glyphicon glyphicon-trash icon-white"></i>
                Eliminar
            </a>
        </td>
    </tr>
    @endforeach
    @endforeach
    @else
    <div class="alert alert-danger fade in">
        <button class="close" data-dismiss="alert" type="button">x</button>
        <i class="fa fa-check-square"></i>No existen registros por el momento
    </div>
    @endif
    
    </tbody>
    </table>
    </div>
    </div>
    </div>
    <!--/span-->



<div>
<!-- Inicio Modal para actualizar o editar datos -->
<div class="modal fade" id="Edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><i class="glyphicon glyphicon-pencil"></i>Editar datos del Participante
        </h4>
      </div>
      <div class="modal-body">
            
            <!--formulario inicio-->
        
            <div class="row">
            <form role="form" class="form-horizontal" id="formEdit" action="actualizarPartisipante" method="post">

                <div class="form-group">
                    <label class="col-sm-4 control-label" for="formGroup">
                        Cédula:
                    </label>
                    <div class="col-sm-4">
                        <input class="form-control" type="text" id="formGroup" name = "cedula_edit" placeholder="Cédula" requered autofocus>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-4 control-label" for="formGroup">
                        Nombres:
                    </label>
                    <div class="col-sm-6">
                        <input class="form-control" type="text" id="formGroup" name ="nombres_edit" placeholder="Nombres">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-4 control-label" for="formGroup">
                        Apellidos:
                    </label>
                    <div class="col-sm-6">
                        <input class="form-control" type="text" id="formGroup" name = "apellidos_edit" placeholder="Apellidos">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-4 control-label" for="formGroup">
                        Nivel Académico:
                    </label>
                    <div class="col-sm-3">
                        <select class="form-control" name = "nivel_academico_edit1">
                            <option>Seleccione</option>
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
                    <div class="col-sm-6">
                        <input class="form-control" type="text" id="formGroup" name = "profesion_edit" placeholder="Profesión">
                    </div>
                </div>
    <!--formulario fin-->
      </div>
      <div class="modal-footer">
        <h4 class="loadingDatos"><span id="load"> 
        <img class='cargandoEditar' src="{{ asset('img/loading-icons/loading3.gif')}}"> Cargando...</span></h4>
        <button class="btn btn-primary btn-ln" type="submit">
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
</div>

<!---->
 <input id="val" type="hidden" name="partisipante" class="input-block-level" value="" >

<!--script json para editar partisipantes-->
<script>
$(document).ready(function() {
  
  $('.edit').click(function() {
  
    $('[name=partisipante]').val($(this).attr ('id'));
    
    var faction = "<?php echo URL::to('partisipante/getpartisipante/data'); ?>";
    
    var fdata = $('#val').serialize();
     $('#load').show();
    $.post(faction, fdata, function(json) {
        if (json.success) {
            $('#formEdit input[name="partisipante_id"]').val(json.id);
            $('#formEdit input[name="cedula_edit"]').val(json.cedula);
            $('#formEdit input[name="nombres_edit"]').val(json.nombres);
            $('#formEdit input[name="apellidos_edit"]').val(json.apellidos);
            $('#formEdit select[name="nivel_academico_edit1"]').val(json.nivel_academico);
            $('#formEdit input[name="profesion_edit"]').val(json.profesion);

            $('#load').hide();
            
        } else {
            $('#errorMessage').html(json.message);
            $('#errorMessage').show();
        }
    });
    
  });
 
});
</script>

<!--end de script-->


@include('includes.footer')
@endif