<?php

class getformularioController extends BaseController {
    public function postData()
    {
    	/**
    	*metodo en el que se obtienen los datos del participante 
    	*y se envian a la interfaz con la ayuda de ==>json
    	*/
	   $formulario_id = Input::get('formulario');
  
       $formulario = Formulario::find($formulario_id);

        $data = array(
				'success' => true,
				'id' => $formulario->id,
				'nombre' => $formulario->nombre,
				'indicaciones' => $formulario->indicaciones
				);
        
        return Response::json($data);
		
    }
}
?>