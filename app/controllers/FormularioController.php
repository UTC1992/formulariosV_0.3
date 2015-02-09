<?php 
	
	class FormularioController extends BaseController
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
			$formularios = DB::table('formularios')->get();
			return View::make('formularios.formulario')->with('formularios', $formularios);
		}

		
		//metodo para registrar un usuario
		public function postCreate()
		{
			//validamos reglas inputs
			$rules = array(
				'nombre' => 'required|max:50',
				'indicaciones' => 'required|min:25'
				);

			$validation = Validator::make(Input::all(),$rules);
			if ($validation->fails()) 
			{
				# code...
				//return Redirect::to('admin')->withInput()->withErrors($validation);
				//se redirecciona a la pagina de administracion con una variable 
				//variable => status con el valor==>false_create
				return Redirect::to('formularios')->with('status', 'no_create');
			}

			//si todo esta bien guardamos los datos
			$form = new Formulario;
			$form->nombre = Input::get('nombre');
			$form->indicaciones = Input::get('indicaciones');
			
			//guardamos
			$form->save();

			//redirigimos a partisipantes
			return Redirect::to('formularios')->with('status', 'ok_create');

		}

		//permite eliminar participantes
		public function getDelete($form_id)
		{
			//buscamos a la aplicacion en la base de datos
			$form = Formulario::find($form_id);

			//eliminamos y reifirigos 
			$form->delete();

			//redirigimos a la tabla de aplicaciones 
			//con la variable status con el valor==>ok_delete
			return Redirect::to('formularios')->with('status', 'ok_delete');
		}

		//permite editar o actualizar los datos de los partisipantes
		public function postUpdate()
		{
			//opteniendo el id del partisipante
			$formulario_id = Input::get('formulario');
			//se busca los datos del participante dependiendo del id
			$formulario = Formulario::find($formulario_id);
			//se obtienen los datos de las cajas de texto y se los ingresa en la base de datos
			$formulario->nombre = Input::get('nombre_edit');
			$formulario->indicaciones = Input::get('indicaciones_edit');
			
			//se guardan los cambios 
			$formulario->save();
			return Redirect::to('formularios')->with('status','ok_update');
		}

	}

 ?>