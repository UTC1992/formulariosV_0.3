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

		public function getIndex()
		{
			//$my_id = Auth::user()->id;
			$partisipantes = DB::table('partisipantes')->get();
			return View::make('admin.table')->with('partisipantes', $partisipantes);
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
				return Redirect::to('admin')->with('status', 'false_create');
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


	}

 ?>