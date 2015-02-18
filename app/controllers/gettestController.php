<?php

class gettestController extends BaseController {
    public function postData()
    {
    	/**
    	*metodo en el que se obtienen los datos del participante 
    	*y se envian a la interfaz con la ayuda de ==>json
    	*/
	   $test_id = Input::get('test');
  		
  		//obteniendo registro del test
       $test = Test::find($test_id);
		//obteniendo registro de la aplicacion
       $app = Aplicacion::find($test->app_id);
       //obteniendo registro de usuario
       $user = User::find($test->users_id);
       //obteniendo registro del formulario
       $form = Formulario::find($test->form_id);

        $data = array(
				'success' => true,
				'id' => $test->id,
				'creador' => Auth::user()->nombres.' '.Auth::user()->apellidos, //$user->nombres.' '.$user->apellidos
				'aplicacion' => $app->nombre,
				'formulario' => $form->nombre,
				'estado' => $test->estado,
				'fecha_creacion' => $test->created_at 
				);
        
        return Response::json($data);
		
    }
}
?>