@if(Auth::check())
@include('includes.header')
            
            <!--formulario inicio-->
        <center>

        <h1>Registro de Tareas</h1>
        <div class="container well">
            <div class="row">
    <!--formulario inicio-->
            <form role="form" class="form-horizontal" id="formEdit" action="crearTareas" method="post">

                <div class="form-group">
                    <label class="col-sm-3 control-label" for="formGroup">
                        Enunciado:
                    </label>
                    <div class="col-sm-6">
                        <textarea class="form-control" type="text" id="formGroup" name ="enunciado" placeholder="Enunciado"></textarea>
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



<div class="container">
<!-- Inicio Modal para crear tareas -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><i class="glyphicon glyphicon-pencil"></i>Nueva Tarea
        </h4>
      </div>
      <div class="modal-body">
            
            <!--formulario inicio-->
        
            <div class="row">
            <form role="form" class="form-horizontal" id="formEdit" action="crearTarea" method="post">

                <div class="form-group">
                    <label class="col-sm-3 control-label" for="formGroup">
                        Enunciado:
                    </label>
                    <div class="col-sm-6">
                        <textarea class="form-control" type="text" id="formGroup" name ="enunciado" placeholder="Enunciado"></textarea>
                    </div>
                </div>
                
    <!--formulario fin-->
      </div>
      <div class="modal-footer">
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
