<?php

class TareaController extends BaseController 
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
		
		$tareas = DB::table('tareas')->get();
		return View::make('tarea.tareas')->with('tareas',$tareas);
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
				'enunciado' => 'required|max:1000'
				);

			$validation = Validator::make(Input::all(),$rules);
			if ($validation->fails()) 
			{
				# code...
				//return Redirect::to('admin')->withInput()->withErrors($validation);
				//se redirecciona a la pagina de administracion con una variable 
				//variable => status con el valor==>false_create
				return Redirect::to('tareas')->with('status', 'no_create');
			}

			//si todo esta bien guardamos los datos
			$tarea = new Tarea;
			$tarea->enunciado = Input::get('enunciado');
			
			//guardamos
			$tarea->save();

			//redirigimos a partisipantes
			return Redirect::to('tareas')->with('status', 'ok_create');


	}

	public function getDelete($tarea_id)
	{
		//se busca el registro segun el id
		$tarea = Tarea::find($tarea_id);

		//se elimina el registro encontrado
		$tarea->delete();

		//se retorna a la tabla de tareas
		return Redirect::to('tareas')->with('status','ok_delete');
	}

	//permite editar o actualizar los datos de las tareas
	public function postUpdate()
	{
			//opteniendo el id del tarea
			$tarea_id = Input::get('tarea');
			//se busca los datos del tarea dependiendo del id
			$tarea = Tarea::find($tarea_id);
			//se obtienen los datos de las cajas de texto y se los ingresa en la base de datos
			$tarea->enunciado = Input::get('enunciado_edit');
			//se guardan los cambios 
			$tarea->save();
			return Redirect::to('tareas')->with('status','ok_update');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
