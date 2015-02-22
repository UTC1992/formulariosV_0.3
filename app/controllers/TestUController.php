<?php 
	
	class TestUController extends BaseController
	{
		public function __construc()
		{
			/***
			se verifica si esta logeado o a iniciado session 
			*/
			//$this->beforeFilter('auth');
		}

		//permite mostrar los partisipantes en una tabla dinamica
		public function getIndex()
		{
			//$my_id = Auth::user()->id;
			//$aplicaciones = DB::table('aplicaciones')->get();
			session_start();
			if (isset($_SESSION['cedula']))
			{
				return View::make('test_usabilidad.testU')->with('cedula',$_SESSION['cedula']);

			}
			
		}

		
		//metodo para registrar un usuario
		public function postCreate()
		{
			//validamos reglas inputs
			$rules = array(
				'nombre' => 'required|max:50',
				'tipo' => 'required|max:50'
				);

			$validation = Validator::make(Input::all(),$rules);
			if ($validation->fails()) 
			{
				# code...
				//return Redirect::to('admin')->withInput()->withErrors($validation);
				//se redirecciona a la pagina de administracion con una variable 
				//variable => status con el valor==>false_create
				return Redirect::to('aplicaciones')->with('status', 'no_create');
			}

			//si todo esta bien guardamos los datos
			$aplicacion = new Aplicacion;
			$aplicacion->nombre = Input::get('nombre');
			$aplicacion->tipo = Input::get('tipo');
			$aplicacion->users_id = Input::get('userAdmin');
			
			//guardamos
			$aplicacion->save();

			//redirigimos a partisipantes
			return Redirect::to('aplicaciones')->with('status', 'ok_create');

		}

		//permite eliminar participantes
		public function getDelete($aplicacion_id)
		{
			//buscamos a la aplicacion en la base de datos
			$aplicacion = Aplicacion::find($aplicacion_id);

			//eliminamos y reifirigos 
			$aplicacion->delete();

			//redirigimos a la tabla de aplicaciones 
			//con la variable status con el valor==>ok_delete
			return Redirect::to('aplicaciones')->with('status', 'ok_delete');
		}

		//permite editar o actualizar los datos de los partisipantes
		public function postUpdate()
		{
			//opteniendo el id del partisipante
			$aplicacion_id = Input::get('aplicacion');
			//se busca los datos del participante dependiendo del id
			$aplicacion = Aplicacion::find($aplicacion_id);
			//se obtienen los datos de las cajas de texto y se los ingresa en la base de datos
			$aplicacion->nombre = Input::get('nombre_edit');
			
			//se guardan los cambios 
			$aplicacion->save();
			return Redirect::to('aplicaciones')->with('status','ok_update');
		}

	}

 ?>