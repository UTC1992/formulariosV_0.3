<?php

class getpartisipanteController extends BaseController {
    public function postData()
    {
    	/**
    	*metodo en el que se obtienen los datos del participante 
    	*y se envian a la interfaz con la ayuda de ==>json
    	*/
	   $partisipante_id = Input::get('partisipante');
  
       $partisipante = Partisipante::find($partisipante_id);

        $data = array(
				'success' => true,
				'id' => $partisipante->id,
				'cedula' => $partisipante->cedula,
				'nombres' => $partisipante->nombres,
				'apellidos' => $partisipante->apellidos,
				'nivel_academico' => $partisipante->nivel_academico,
				'profesion' => $partisipante->profesion
				);
        
        return Response::json($data);
		
    }
}
?>