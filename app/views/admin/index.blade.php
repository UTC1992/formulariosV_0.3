@if(Auth::check())

@include('includes.header')
<div>
    <ul class="breadcrumb">
        <li>
            <a class="btn btn-primary btn-ln" href="admin">Inicio</a>
        </li>
        <li>
            <a class="btn btn-primary btn-ln" href="admin">Administración</a>
        </li>
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">

<!--mensaje de confirmacion de creacion de usuario-->
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
<!--end mensaje de registro-->


        <div class="box-inner">
            <div class="box-header well">
                <h2><i class="glyphicon glyphicon-info-sign"></i> Introducción</h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                </div>
            </div>
            <div class="box-content row">
                <div class="col-lg-7 col-md-12">
                    <p>Bienvenido a la adinistración del test de usabilidad</p>

                </div>

            </div>
        </div>
    </div>
</div>

    <!--/span-->
</div><!--/row-->
@include('includes.footer')

@endif    