@if(Auth::check())
@include('includes.header')
    <div>
        <ul class="breadcrumb">
            <li>
                <a class="btn btn-primary btn-ln" href="index_admin">Inicio</a>
            </li>
            <li>
                <a class="btn btn-primary btn-ln" href="table_admin">Tareas</a>
            </li>
            <li>
                <a class="btn btn-primary btn-ln" class="ajax-link" href="registroTareas" >
                <i class=""></i><span>Crear Tarea</span></a>
            </li
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
    @if($status=='no_create')
    <div class="alert alert-danger fade in">
        <button class="close" data-dismiss="alert" type="button">x</button>
        <i class="fa fa-check-square"></i>Error el usuario no fue ingresado
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
        <h2><i class="glyphicon glyphicon-user"></i>Tareas a realizar por los usuarios</h2>

        <div class="box-icon">
            <a href="#" class="btn btn-minimize btn-round btn-default"><i
                    class="glyphicon glyphicon-chevron-up"></i></a>
        </div>
    </div>
    <div class="box-content">

    <!-- $partisipantes es una variable enviada desde del controlador con with-->
    @if($tareas)
    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>
    <tr>
        <th>ID</th>
        <th>Enunciado</th>
        <th>Formulario</th>
        <th>Ámbito</th>
        <th>Fecha de Creación</th>
        <th>Operaciones</th>
    </tr>
    </thead>

    <tbody>
    <tr>
        
        <!--asignamos a un bucle de array $partisipantes a partisipant-->
        @foreach($tareas as $tarea)
        <td class="center">{{$tarea->id}}</td>
        <td class="col-sm-3"><textarea class="col-sm-12" readonly="readonly">{{$tarea->enunciado}}</textarea></td>
        <?php $form = DB::table('formularios')->where('id',$tarea->form_id)->first(); ?>
        <td class="col-sm-2">{{$form->nombre}}</td>
        <?php $ambito = DB::table('ambitos')->where('id',$tarea->ambitos_id)->first(); ?>
        <td class="col-sm-2">{{$ambito->nombre}}</td>
        <td class="col-sm-2">{{$tarea->created_at}}</td>
        <!--<td class="center">
            <span class="label-success label label-default">Active</span>
        </td>
        -->
        <td class="center">
            <!--
            <a class="btn btn-success" href="#">
                <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                Mostrar
            </a>
            
            <a class="btn btn-info" href="#" data-toggle="modal" data-target="#editModal">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                Editar
            </a>
            -->
            <button class="btn btn-info" >
                <i class="glyphicon glyphicon-edit icon-white"></i>
                {{HTML::link('#Edit','Editar',array('class'=>'edit','id'=>$tarea->id,'data-toggle'=>'modal'))}}
            </button>

            <a class="btn btn-danger" href="<?=URL::to('eliminarTarea'); ?>/{{$tarea->id}}">
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


<!-- Inicio Modal para actualizar tareas -->
<div class="modal fade" id="Edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><i class="glyphicon glyphicon-pencil"></i>Editar Tarea
        </h4>
      </div>
      <div class="modal-body">
            
            <!--formulario inicio-->
        
            <div class="row">
            <form role="form" class="form-horizontal" id="formEdit" action="actualizarTarea" method="post">

                <div class="form-group">
                    <label class="col-sm-3 control-label" for="formGroup">
                        Enunciado:
                    </label>
                    <div class="col-sm-6">
                        <textarea class="form-control" type="text" id="formGroup" name="enunciado_edit" placeholder="Enunciado">
                        </textarea>
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

<!---->
 <input id="val" type="hidden" name="tarea" class="input-block-level" value="" >

<!--script json para editar partisipantes-->
<script>
$(document).ready(function() 
{
  
  $('.edit').click(function() 
  {
  
    $('[name=tarea]').val($(this).attr ('id'));
    
    var faction = "<?php echo URL::to('tarea/gettarea/data'); ?>";
    
    var fdata = $('#val').serialize();
     $('#load').show();
    $.post(faction, fdata, function(json) {
        if (json.success) {
            $('#formEdit input[name="tarea_id"]').val(json.id);
            $('#formEdit textarea[name="enunciado_edit"]').val(json.enunciado);

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