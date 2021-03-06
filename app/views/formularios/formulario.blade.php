@if(Auth::check())
@include('includes.header')
    <div>
        <ul class="breadcrumb">
            <li>
                <a class="btn btn-primary btn-ln" href="index_admin">Inicio</a>
            </li>
            <li>
                <a class="btn btn-primary btn-ln" href="formularios ">Formularios</a>
            </li>
            <li>
                <a class="btn btn-primary btn-ln" href="registroForm">Registrar formulario</a>
            </li>
        </ul>
    </div>


    <div class="row">
    <div class="box col-md-12">

<!--mensaje de confirmacion de eliminacion de usuario-->
    <?php $status=Session::get('status'); ?>
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
    @if($formularios)
    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Tipo</th>
        <th>Operaciones</th>
    </tr>
    </thead>

    <tbody>
    <tr>
        
        <!--asignamos a un bucle de array $partisipantes a partisipant-->
        @foreach($formularios as $formulario)
        <td class="center">{{$formulario->id}}</td>
        <td class="center">{{$formulario->nombre}}</td>
        <td class="center"><textarea class="col-sm-12" readonly="readonly">{{$formulario->indicaciones}}</textarea></td>
        <!--<td class="center">
            <span class="label-success label label-default">Active</span>
        </td>
        -->
        <td class="center">
            <button class="btn btn-info" href="#" >
                <i class="glyphicon glyphicon-edit icon-white"></i>
                {{HTML::link('#Edit','Editar',array('class'=>'edit','id'=>$formulario->id,'data-toggle'=>'modal','title'=>$formulario->nombre))}}
            </button>
            <a class="btn btn-danger" href="<?=URL::to('eliminarForm'); ?>/{{$formulario->id}}">
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


<!-- Inicio Modal para actualizar o editar datos -->
<div class="modal fade" id="Edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><i class="glyphicon glyphicon-pencil"></i>Editar datos de la Aplicación
        </h4>
      </div>
      <div class="modal-body">
            
            <!--formulario inicio-->
        
            <div class="row">
            <form role="form" class="form-horizontal" id="formEdit" action="actualizarForm" method="post">

                <div class="form-group">
                    <label class="col-sm-4 control-label" for="formGroup">
                        Nombre:
                    </label>
                    <div class="col-sm-4">
                        <input class="form-control" type="text" id="formGroup" name = "nombre_edit" placeholder="Cédula" requered autofocus>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-4 control-label" for="formGroup">
                        Indicaciones:
                    </label>
                    <div class="col-sm-6">
                        <textarea class="form-control" id="formGroup" name="indicaciones_edit" placeholder="Indicaciones"></textarea>
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
 <input id="val" type="hidden" name="formulario" class="input-block-level" value="" >

<!--script json para editar partisipantes-->
<script>
$(document).ready(function() {
  
  $('.edit').click(function() {
  
    $('[name=formulario]').val($(this).attr ('id'));
    
    var faction = "<?php echo URL::to('formulario/getformulario/data'); ?>";
    
    var fdata = $('#val').serialize();
     $('#load').show();
    $.post(faction, fdata, function(json) {
        if (json.success) {
            $('#formEdit input[name="formulario_id"]').val(json.id);
            $('#formEdit input[name="nombre_edit"]').val(json.nombre);
            $('#formEdit textarea[name="indicaciones_edit"]').val(json.indicaciones);

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