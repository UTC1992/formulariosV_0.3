@if(Auth::check())
@include('includes.header')
<div>
        <ul class="breadcrumb">
            <li>
                <a class="btn btn-primary btn-ln" href="index_admin">Inicio</a>
            </li>
            <li>
                <a class="btn btn-primary btn-ln" href="tests">Tests</a>
            </li>
            <li>
                <a class="btn btn-primary btn-ln" href="registroTest">Crear Test</a>
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
    @if($tests)
    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>
    <tr>
        <th>ID</th>
        <th>Creador</th>
        <th>Aplicación</th>
        <th>Formulario</th>
        <th>Estado</th>
        <th>Fecha de Creación</th>
        <th>Operaciones</th>
    </tr>
    </thead>

    <tbody>
    <tr>
        
        <!--asignamos a un bucle de array $partisipantes a partisipant-->
        @foreach($tests as $test)
        <td class="center">{{$test->id}}</td>
        <td class="col-sm-2">{{Auth::user()->nombres}} {{Auth::user()->apellidos}}</td>
        <?php $app = DB::table('aplicaciones')->where('id',$test->app_id)->first(); ?>
        <td class="col-sm-1">{{$app->nombre}}</td>
        <?php $form = DB::table('formularios')->where('id',$test->form_id)->first(); ?>
        <td class="col-sm-3">{{$form->nombre}}</td>
        <td class="col-sm-1">{{$test->estado}}</td>
        <td class="col-sm-2">{{$test->created_at}}</td>
        
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
            
            <button class="btn btn-info" href="#" >
                <i class="glyphicon glyphicon-edit icon-white"></i>
                {{HTML::link('#Edit','Editar',array('class'=>'edit','id'=>$test->id,'data-toggle'=>'modal','title'=>'Test'))}}
            </button>
            -->
            <a class="btn btn-info edit" id="{{$test->id}}"  data-toggle="modal" href="<?=URL::to('#Edit'); ?>">
                <i class="glyphicon glyphicon-trash icon-white"></i>
                Editar
            </a>
            <a class="btn btn-danger" href="<?=URL::to('eliminarTest'); ?>/{{$test->id}}">
                <i class="glyphicon glyphicon-trash icon-white"></i>
                Eliminar
            </a>
        </td>
    </tr>
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
            <form role="form" class="form-horizontal" id="formEdit" action="actualizarTest" method="post">

                <div class="form-group">
                    <label class="col-sm-3 control-label" for="formGroup">
                        Creado por:
                    </label>
                    <div class="col-sm-4">
                        <input class="form-control" type="text" id="formGroup" name = "creador_edit" placeholder="Creador" value="" disabled>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label" for="formGroup">
                        Estado:
                    </label>
                    <div class="col-sm-3">
                        <select class="form-control"  name="estado_edit">
                            <option>Seleccione</option>
                            <option>Abierto</option>
                            <option>Cerrado</option>
                        </select>
                    </div>
                </div>
                <?php  $apps = DB::table('aplicaciones')->get();?>
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="formGroup">
                        Aplicación:
                    </label>
                    <div class="col-sm-3">
                        <select class="form-control" name = "aplicacion_edit">
                            <option>Seleccione</option>
                        @foreach($apps as $app)
                            <option>{{$app->nombre}}</option>
                        @endforeach
                        </select>
                    </div>
                </div>
                
                <?php  $forms = DB::table('formularios')->get();?>
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="formGroup">
                        Formularios:
                    </label>
                    <div class="col-sm-3">
                        <select class="form-control" name = "formulario_edit">
                            <option>Seleccione</option>
                        @foreach($forms as $form)
                            <option>{{$form->nombre}}</option>
                        @endforeach
                        </select>
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
 <input id="val" type="hidden" name="test" class="input-block-level" value="" >

<!--script json para editar partisipantes-->
<script>
$(document).ready(function() {
  
  $('.edit').click(function() {
  
    $('[name=test]').val($(this).attr ('id'));
    
    var faction = "<?php echo URL::to('test/gettest/data'); ?>";
    
    var fdata = $('#val').serialize();
     $('#load').show();
    $.post(faction, fdata, function(json) {
        if (json.success) {
            $('#formEdit input[name="test_id"]').val(json.id);
            $('#formEdit input[name="creador_edit"]').val(json.creador);
            $('#formEdit select[name="aplicacion_edit"]').val(json.aplicacion);
            $('#formEdit select[name="formulario_edit"]').val(json.formulario);
            $('#formEdit select[name="estado_edit"]').val(json.estado);
            $('#formEdit input[name="fecha_edit"]').val(json.fecha_creacion);

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