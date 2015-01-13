<?php 
	
	class PartisipanteController extends BaseController
	{
		public function __construc()
		{
			/***
			se verifica si esta logeado o a iniciado session 
			*/
			$this->beforeFilter('auth');
		}

		//permite mostrar los partisipantes en una tabla dinamica
		public function getIndex()
		{
			//$my_id = Auth::user()->id;
			$partisipantes = DB::table('partisipantes')->get();
			return View::make('tablas.partisipantes')->with('partisipantes', $partisipantes);
		}

		//metodo para registrar un usuario
		public function postCreate()
		{
			//validamos reglas inputs
			$rules = array(
				'cedula' => 'required|max:50|unique:partisipantes|min:10',
				'nombres' => 'required|max:50',
				'apellidos' => 'required|max:60',
				'nivelAcademico' => 'required|max:50', 
				'profesion' => 'required|max:50'
				);

			$validation = Validator::make(Input::all(),$rules);
			if ($validation->fails()) 
			{
				# code...
				//return Redirect::to('admin')->withInput()->withErrors($validation);
				//se redirecciona a la pagina de administracion con una variable 
				//variable => status con el valor==>false_create
				return Redirect::to('admin')->with('status', 'no_create');
			}

			//si todo esta bien guardamos los datos
			$partisipante = new Partisipante;
			$partisipante->cedula = Input::get('cedula');
			$partisipante->nombres = Input::get('nombres');
			$partisipante->apellidos = Input::get('apellidos');
			$partisipante->nivel_academico = Input::get('nivelAcademico');
			$partisipante->profesion = Input::get('profesion');
			
			//guardamos
			$partisipante->save();

			//redirigimos a partisipantes
			return Redirect::to('admin')->with('status', 'ok_create');

		}

		//permite eliminar participantes
		public function getDelete($partisipante_id)
		{
			//buscamos al usuaro en la base de datos
			$partisipante = Partisipante::find($partisipante_id);

			//eliminamos y reifirigos 
			$partisipante->delete();

			//redirigimos a la tabla de partisiántes 
			//con la variable status con el valor==>ok_delete
			return Redirect::to('partisipantes')->with('status', 'ok_delete');
		}

		//permite editar o actualizar los datos de los partisipantes
		public function postUpdate()
		{
			//
			$partisipante_id = Input::get('partisipante');
			$partisipante = Partisipante::find($partisipante_id);

			$partisipante->cedula = Input::get('cedula_edit');
			$partisipante->nombres = Input::get('nombres_edit');
			$partisipante->apellidos = Input::get('apellidos_edit');
			$nivelAcademico = Input::get('nivel_academico_edit2');
			if ($nivelAcademico<>'Ninguno') 
			{
				//
				$partisipante->nivel_academico = Input::get('nivel_academico_edit2');
			}
			$partisipante->profesion = Input::get('profesion_edit');

			$partisipante->save();
			return Redirect::to('partisipantes')->with('status','ok_update');
		}

	}

 ?>