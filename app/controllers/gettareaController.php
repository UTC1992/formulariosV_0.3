<?php

class gettareaController extends BaseController {
    public function postData()
    {
    	/**
    	*metodo en el que se obtienen los datos del participante 
    	*y se envian a la interfaz con la ayuda de ==>json
    	*/
	   $tarea_id = Input::get('tarea');
  
       $tarea = Tarea::find($tarea_id);

        $data = array(
				'success' => true,
				'id' => $tarea->id,
				'enunciado' => $tarea->enunciado
				);
        
        return Response::json($data);
		
    }
}
?>