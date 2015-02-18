@if(Auth::check())

<!DOCTYPE html>
<html lang="en">
<head>
    <!--
        ===
        This comment should NOT be removed.

        Charisma v2.0.0

        Copyright 2012-2014 Muhammad Usman
        Licensed under the Apache License v2.0
        http://www.apache.org/licenses/LICENSE-2.0

        http://usman.it
        http://twitter.com/halalit_usman
        ===
    -->
    @include('includes.styles')
    

    <meta charset="utf-8">
    <title>Administración</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
    <meta name="author" content="Muhammad Usman">

    <!-- The styles -->
    <link id="bs-css" href="css/bootstrap-cerulean.min.css" rel="stylesheet">

    <link href="css/charisma-app.css" rel="stylesheet">
    <link href='bower_components/fullcalendar/dist/fullcalendar.css' rel='stylesheet'>
    <link href='bower_components/fullcalendar/dist/fullcalendar.print.css' rel='stylesheet' media='print'>
    <link href='bower_components/chosen/chosen.min.css' rel='stylesheet'>
    <link href='bower_components/colorbox/example3/colorbox.css' rel='stylesheet'>
    <link href='bower_components/responsive-tables/responsive-tables.css' rel='stylesheet'>
    <link href='bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css' rel='stylesheet'>
    <link href='css/jquery.noty.css' rel='stylesheet'>
    <link href='css/noty_theme_default.css' rel='stylesheet'>
    <link href='css/elfinder.min.css' rel='stylesheet'>
    <link href='css/elfinder.theme.css' rel='stylesheet'>
    <link href='css/jquery.iphone.toggle.css' rel='stylesheet'>
    <link href='css/uploadify.css' rel='stylesheet'>
    <link href='css/animate.min.css' rel='stylesheet'>

    <!-- jQuery -->
    <script src="bower_components/jquery/jquery.min.js"></script>

    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- The fav icon -->
    <link rel="shortcut icon" href="img/administracion.png">
</head>

<body>
<?php if (!isset($no_visible_elements) || !$no_visible_elements) { ?>
    <!-- topbar starts -->
    <div class="navbar navbar-default" role="navigation">

        <div class="navbar-inner">
            <
            <button type="button" class="navbar-toggle pull-left animated flip">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index_admin"> <img src="img/logo_admin.png" class="hidden-xs"/>
                <span>Usabilidad</span></a>

            <!-- user dropdown starts -->
            <div class="btn-group pull-right">
                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <i class="glyphicon glyphicon-user"></i><span class="hidden-sm hidden-xs">{{Auth::user()->username}}</span>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li><a href="perfil">Profile</a></li>
                    <li class="divider"></li>
                    <li><a href="logout">Logout</a></li>
                </ul>
            </div>
            <!-- user dropdown ends -->

            <!-- theme selector starts -->
            <div class="btn-group pull-right theme-container animated tada">
                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <i class="glyphicon glyphicon-tint"></i><span
                        class="hidden-sm hidden-xs"> Cambiar Tema</span>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" id="themes">
                    <li><a data-value="classic" href="#"><i class="whitespace"></i> Classic</a></li>
                    <li><a data-value="cerulean" href="#"><i class="whitespace"></i> Cerulean</a></li>
                    <li><a data-value="cyborg" href="#"><i class="whitespace"></i> Cyborg</a></li>
                    <li><a data-value="simplex" href="#"><i class="whitespace"></i> Simplex</a></li>
                    <li><a data-value="darkly" href="#"><i class="whitespace"></i> Darkly</a></li>
                    <li><a data-value="lumen" href="#"><i class="whitespace"></i> Lumen</a></li>
                    <li><a data-value="slate" href="#"><i class="whitespace"></i> Slate</a></li>
                    <li><a data-value="spacelab" href="#"><i class="whitespace"></i> Spacelab</a></li>
                    <li><a data-value="united" href="#"><i class="whitespace"></i> United</a></li>
                </ul>
            </div>
            <!-- theme selector ends -->
            
            

        </div>
    </div>
    <!-- topbar ends -->
<?php } ?>
<div class="ch-container">
    <div class="row">
        <?php if (!isset($no_visible_elements) || !$no_visible_elements) { ?>

        <!-- left menu starts -->
        <div class="col-sm-2 col-lg-2">
            <div class="sidebar-nav">
                <div class="nav-canvas">
                    <div class="nav-sm nav nav-stacked">

                    </div>
                    <ul class="nav nav-pills nav-stacked main-menu">
                        <li class="nav-header">Menú</li>
                        <li requered autofocus><a class="ajax-link" href="index_admin"><i class="glyphicon glyphicon-home"></i><span> Administración</span></a>
                        </li>
                        <li class="nav-header hidden-md">Tests</li>
                        <li><a class="ajax-link" href="<?=URL::to('tests'); ?>">
                            <i class="glyphicon glyphicon-folder-open"></i><span> Tests</span></a>
                        </li>
                        <li><a class="ajax-link" href="<?=URL::to('formularios'); ?>">
                            <i class="glyphicon glyphicon-list-alt"></i><span> Formularios</span></a>
                        </li>
                        <li><a class="ajax-link" href="<?=URL::to('tareas'); ?>">
                            <i class="glyphicon glyphicon-folder-open"></i><span> Tareas</span></a>
                        </li>
                        <li><a class="ajax-link" href="<?=URL::to('ambitos'); ?>">
                            <i class="glyphicon glyphicon-folder-open"></i><span> Ámbitos</span></a>
                        </li>
                        <li class="nav-header hidden-md">Datos</li>
                        <li><a class="ajax-link" href="<?=URL::to('partisipantes'); ?>">
                            <i class="glyphicon glyphicon-user"></i><span> Partisipantes</span></a>
                        </li>
                        <li><a class="ajax-link" href="<?=URL::to('aplicaciones'); ?>">
                            <i class="glyphicon glyphicon-align-justify"></i><span> Aplicaciones</span></a>
                        </li>
                        <li class="nav-header hidden-md"> Vista tests</li>
                        <li><a class="ajax-link" href="<?=URL::to('testUsabilidad'); ?>">
                            <i class="glyphicon glyphicon-user"></i><span> Visualizar Test</span></a>
                        </li>

                        <!--
                        <li><a href="formulario"><i class="glyphicon glyphicon-edit"></i><span>Formulario</span></a>
                        <li class="nav-header hidden-md">Usuarios</li>
                        -->
                        <!-- Button trigger modal 
                        <li><a href="#" data-toggle="modal" data-target="#myModal">
                            <i class="glyphicon glyphicon-plus"></i><span>Registrar</span></a>
                        </li>
                        -->
                    </ul>
                </div>
            </div>
        </div>
        <!--/span-->
        <!-- left menu ends -->

        <div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
            <?php } ?>

@endif