<?php

class getaplicacionController extends BaseController {
    public function postData()
    {
    	/**
    	*metodo en el que se obtienen los datos del participante 
    	*y se envian a la interfaz con la ayuda de ==>json
    	*/
	   $aplicacion_id = Input::get('aplicacion');
  
       $aplicacion = Aplicacion::find($aplicacion_id);

        $data = array(
				'success' => true,
				'id' => $aplicacion->id,
				'nombre' => $aplicacion->nombre,
				'tipo' => $aplicacion->tipo
				);
        
        return Response::json($data);
		
    }
}
?>