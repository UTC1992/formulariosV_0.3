<?php

class getambitoController extends BaseController {
    public function postData()
    {
    	/**
    	*metodo en el que se obtienen los datos del participante 
    	*y se envian a la interfaz con la ayuda de ==>json
    	*/
	   $ambito_id = Input::get('ambito');
  
       $ambito = Ambito::find($ambito_id);

        $data = array(
				'success' => true,
				'id' => $ambito->id,
				'nombre' => $ambito->nombre
				);
        
        return Response::json($data);
		
    }
}
?>