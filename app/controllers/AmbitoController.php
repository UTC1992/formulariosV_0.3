<?php

class AmbitoController extends BaseController 
{
	public function __construc()
	{
		$this->beforeFilter('auth');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		
		$ambitos = DB::table('ambitos')->get();
		return View::make('ambitos.ambito')->with('ambitos',$ambitos);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function postCreate()
	{
		//registrar tareas

		//validamos reglas inputs
			$rules = array(
				'nombre' => 'required|max:100'
				);

			$validation = Validator::make(Input::all(),$rules);
			if ($validation->fails()) 
			{
				# code...
				//return Redirect::to('admin')->withInput()->withErrors($validation);
				//se redirecciona a la pagina de administracion con una variable 
				//variable => status con el valor==>false_create
				return Redirect::to('ambitos')->with('status', 'no_create');
			}

			//si todo esta bien guardamos los datos
			$ambitos = new Ambito;
			$ambitos->nombre = Input::get('nombre');
			
			//guardamos
			$ambitos->save();

			//redirigimos a partisipantes
			return Redirect::to('ambitos')->with('status', 'ok_create');


	}

	public function getDelete($ambito_id)
	{
		//se busca el registro segun el id
		$ambito = Ambito::find($ambito_id);

		//se elimina el registro encontrado
		$ambito->delete();

		//se retorna a la tabla de tareas
		return Redirect::to('ambitos')->with('status','ok_delete');
	}

	//permite editar o actualizar los datos de las tareas
	public function postUpdate()
	{
			//opteniendo el id del tarea
			$ambito_id = Input::get('ambito');
			//se busca los datos del tarea dependiendo del id
			$ambito = Ambito::find($ambito_id);
			//se obtienen los datos de las cajas de texto y se los ingresa en la base de datos
			$ambito->nombre = Input::get('nombre_edit');
			//se guardan los cambios 
			$ambito->save();
			return Redirect::to('ambitos')->with('status','ok_update');
	}

}
