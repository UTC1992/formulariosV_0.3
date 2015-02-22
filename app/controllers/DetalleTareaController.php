<?php 
	
	class DetalleTareaController extends BaseController
	{
		//metodo para registrar un usuario
		public function postCreate()
		{

			//si todo esta bien guardamos los datos
			$detalleTarea = new Detalle_Tarea;
			$detalleTarea->respuesta = $_POST['respuesta'];
			$detalleTarea->tareas_id = Input::get('tarea_id');
			$cedula = Input::get('cedula');
			$partisipante = DB::table('partisipantes')->where('cedula',$cedula)->first();
			$detalleTarea->partisipantes_id = $partisipante->id;
			
			//guardamos
			$detalleTarea->save();

			//redirigimos a partisipantes
			//return Redirect::to('aplicaciones')->with('status', 'ok_create');

		}

	}

 ?>