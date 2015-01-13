<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

//ruta raiz inicial al ingresar a la aplicacion
Route::get('/', function(){return View::make('login');});

//login autenticar datos
Route::post('login', 'UserLogin@user');

//Desconecta al usuario
Route::get('logout', ['uses' => 'UserLogin@logout', 'before' => 'auth']);

//ruta de interfaz del administrador
Route::get('admin', array('before' => 'auth' , function() {return View::make('admin.index');}));

//===========================RUTAS PARA NAVEGAR ENTRE LAS PAGINAS=============
//Route::get('admin', function(){return View::make('admin.index');});
Route::get('index_admin', function(){return View::make('admin.index');});
//Route::get('table_admin', function(){return View::make('admin.table');});
Route::get('error_admin', function(){return View::make('admin.error');});
Route::get('login_admin', function(){return View::make('login');});
Route::get('formulario', function(){return View::make('formularios.formulario');});


//=======================CRUD DE LOS PARTICIPANTES==============
//registrar partisipantes
Route::post('registrarPartisipantes', 'PartisipanteController@postCreate');
//mostrar partisipantes
Route::controller('partisipantes', 'PartisipanteController');
//eliminar partisipantes
Route::get('eliminarPartisipante/{id}','PartisipanteController@getDelete');
//obtener datos de la base de datos
Route::controller('partisipante/getpartisipante','getpartisipanteController');
//actualizar los datos obtenidos
Route::post('actualizarPartisipante','PartisipanteController@postUpdate');
