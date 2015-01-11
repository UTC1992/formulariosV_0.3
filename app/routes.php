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

Route::get('/', function()
{
	return View::make('login');
});

Route::get('creartabla', function()
{
	Schema::create('products', function($tabla)
	{
			$tabla->increments('id');
			$tabla->string('name');
			$tabla->string('description');
			$tabla->integer('cantidad');
			$tabla->float('precio');
			$tabla->timestamps();
	});
	return "tabla productos creada";
});
Route::get('registrar', function()
{
	$producto = new Product;
	$producto->name = "iPad";
	$producto->description = "Smart table 2014";
	$producto->cantidad = 60;
	$producto->precio = 750;

	//guardamos
	$producto->save();
	return "el producto fue agregado correctamente";
});

Route::get('buscar', function()
{
	//buscar por id
	//$producto = Product::find(1);

	//buscar caracteres
	$producto = Product::where('name', '=','iPad')->get();
	return 'La cantidad de productos es: '.$producto[0]['cantidad'];
});

Route::get('actualizar', function()
{
	$producto = Product::find(2);
	$producto->cantidad = 120;
	$producto->precio = 620;
	$producto->save();

	return "registro actualizado correctamente";
});

Route::get('eliminar', function()
{
	$producto = Product::find(1);
	$producto->delete();

	return "registro eliminado correctamente";
});

//autenticacion basica
Route::get('login2', array('before' => 'auth.basic' , function() 
	{
		return View::make('hello');
	}));

//login
Route::post('login', 'UserLogin@user');

//deslogin logout
//Route::get('/logout', 'UserLogin@logout');

//Desconecta al usuario
Route::get('logout', ['uses' => 'UserLogin@logout', 'before' => 'auth']);


//rutas del sistema
Route::controller('package', 'PackageController');

//ruta de administrador

Route::get('admin', array('before' => 'auth' , function() 
	{
		return View::make('admin.index');

	}));



//rutas de paginas administración
//Route::get('admin', function(){return View::make('admin.index');});
Route::get('index_admin', function(){return View::make('admin.index');});
//Route::get('table_admin', function(){return View::make('admin.table');});
Route::get('error_admin', function(){return View::make('admin.error');});
Route::get('login_admin', function(){return View::make('login');});
Route::get('formulario', function(){return View::make('formularios.formulario');});

//registrar partisipantes

Route::post('registrarPartisipantes', 'PartisipanteController@postCreate');
Route::controller('partisipantes', 'PartisipanteController');
