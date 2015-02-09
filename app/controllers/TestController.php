<?php  

	class TestController extends BaseController
	{
		public function __construc()
		{
			$this->beforeFilter('auth');
		}

		//permite mostrar los test en una tabla dinamica
		public function getIndex()
		{
			$tests = DB::table('tests')->where('users_id',Auth::user()->id)->get();
			return View::make('tests.test')->with('tests', $tests);
		}

		//metodo para registrar un usuario
		public function postCreate()
		{


			//si todo esta bien guardamos los datos
			$test = new Test;
			$test->users_id = Input::get('userAdmin');
			$test->estado = Input::get('estado');
			$form = DB::table('formularios')->where('nombre',Input::get('formulario'))->first();
			$test->form_id = $form->id; 

			//$app = Input::get('aplicacion');
			$app = DB::table('aplicaciones')->where('nombre',Input::get('aplicacion'))->first();
			$test->app_id = $app->id;
			//guardamos
			$test->save();

			//redirigimos a partisipantes
			return Redirect::to('tests')->with('status', 'ok_create');

		}

		//permite eliminar participantes
		public function getDelete($test_id)
		{
			//buscamos a la aplicacion en la base de datos
			$test = Test::find($test_id);

			//eliminamos y reifirigos 
			$test->delete();

			//redirigimos a la tabla de aplicaciones 
			//con la variable status con el valor==>ok_delete
			return Redirect::to('tests')->with('status', 'ok_delete');
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
			$tipo = Input::get('tipo_edit2');
			if ($tipo<>'Ninguno') 
			{
				//
				$aplicacion->tipo = Input::get('tipo_edit2');
			}
			
			//se guardan los cambios 
			$aplicacion->save();
			return Redirect::to('aplicaciones')->with('status','ok_update');
		}
	}
	
?>