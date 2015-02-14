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
Route::post('login','UserLogin@user');

//Desconecta al usuario
Route::get('logout', ['uses' => 'UserLogin@getLogout', 'before' => 'auth']);

//ruta de interfaz del administrador
Route::get('admin', array('before' => 'auth' , function() {return View::make('admin.index');}));

//===========================RUTAS PARA NAVEGAR ENTRE LAS PAGINAS=============
Route::get('index_admin', function(){return View::make('admin.index');});
Route::get('tareas_admin', function(){return View::make('admin.table');});
Route::get('error_admin', function(){return View::make('admin.error');});
Route::get('login_admin', function(){return View::make('login');});
Route::get('formulario', function(){return View::make('formularios.formulario');});
Route::get('registroUsuarios', function(){return View::make('usuarios.registro');});
Route::get('registroTareas', function(){return View::make('tarea.registro');});

//============================ADMINISTRADOR===================================
//interfaz registro
Route::get('registroAdmin',function(){return View::make('admin.registro');});
//registrar adminisstrador
Route::post('registrarAdmin','UserController@postCreate');
//obtener datos del administrador y mostrarlos en el PERFIL
Route::get('perfil','UserController@getIndex');

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

//=======================CRUD DE LAS TAREAS==============
//mostrar tareas
Route::controller('tareas','TareaController');
//crear tareas
Route::post('crearTareas','TareaController@postCreate');
//optener datos de tarea
Route::controller('tarea/gettarea','gettareaController');
//actualizar datos de la tarea
Route::post('actualizarTarea','TareaController@postUpdate');
//eliminar Tarea
Route::get('eliminarTarea/{id}','TareaController@getDelete');

//================== APLICACIONES============================
//mostrar interfaz de registro
Route::get('registroApp',function(){return View::make('aplicacion.registro');});
//registrar aplicaciones
Route::post('registrarAplicacion', 'AplicacionController@postCreate');
//mostrar aplicaciones
Route::controller('aplicaciones', 'AplicacionController');
//obtener datos de la aplicacion
Route::controller('aplicacion/getaplicacion','getaplicacionController');
//actualizar datos de APP
Route::post('actualizarApp','AplicacionController@postUpdate');
//eliminar aplicacion
Route::get('eliminarApp/{id}','AplicacionController@getDelete');

//==========================TEST=====================================
//mostrar tests
Route::controller('tests','TestController');
//mostrar interfaz de registro de test
Route::get('registroTest',function(){return View::make('tests.registro');});
//registrar test
Route::post('crearTest','TestController@postCreate');
//eliminar test
Route::get('eliminarTest/{id}','TestController@getDelete');

//==========================FORMULARIOS=====================================
//mostrar formularios
Route::controller('formularios','FormularioController');
//mostrar interfaz de registro de test
Route::get('registroForm',function(){return View::make('formularios.registro');});
//registrar formulario 
Route::post('registrarForm','FormularioController@postCreate');
//eliminar test
Route::get('eliminarForm/{id}','FormularioController@getDelete');
//optener datos de tarea
Route::controller('formulario/getformulario','getformularioController');
//actualizar datos de la tarea
Route::post('actualizarForm','FormularioController@postUpdate');

//==========================AMBITOS=====================================
//mostrar ambitos de usabilidad para cada preguntas
Route::controller('ambitos','AmbitoController');
//mostrar interfaz de registro de ambito
Route::get('registroAmbito',function(){return View::make('ambitos.registro');});
//registrar ambito
Route::post('registrarAmbito','AmbitoController@postCreate');
//eliminar ambito
Route::get('eliminarAmbito/{id}','AmbitoController@getDelete');
//optener datos de ambito
Route::controller('ambito/getambito','getAmbitoController');
//actualizar datos de la ambito
Route::post('actualizarAmbito','AmbitoController@postUpdate');

//==========================AMBITOS=====================================
//mostrar test de usabilidad para vista previa
Route::get('testUsabilidad',function(){return View::make('test_usabilidad.testU');});
