<?php 
	
	class AplicacionController extends BaseController
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
			$aplicaciones = DB::table('aplicaciones')->get();
			return View::make('aplicacion.aplicaciones')->with('aplicaciones', $aplicaciones);
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
			
			//guardamos
			$aplicacion->save();

			//redirigimos a partisipantes
			return Redirect::to('aplicaciones')->with('status', 'ok_create');

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
			//opteniendo el id del partisipante
			$partisipante_id = Input::get('partisipante');
			//se busca los datos del participante dependiendo del id
			$partisipante = Partisipante::find($partisipante_id);
			//se obtienen los datos de las cajas de texto y se los ingresa en la base de datos
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
			//se guardan los cambios 
			$partisipante->save();
			return Redirect::to('partisipantes')->with('status','ok_update');
		}

	}

 ?>