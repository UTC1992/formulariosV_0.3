<?php 
	
	class PartisipanteLogin extends BaseController{
		public function Partisipante()
		{

			$cedula = Input::get('cedula');
			$partisipante = DB::table('partisipantes')->where('cedula',$cedula)->first();

			if($partisipante)
			{
				//iniciar session 
				session_start();
				
				if (!isset($_SESSION['cedula'])) {
					//crear unsa session con el dato cedula
					$_SESSION['cedula'] = $cedula;
				}
	
				//comprobar si existe una session
				if (empty($_SESSION['cedula'])) 
				{
					//si no existe una session se redirecciona a index
					return Redirect::to('/');
				}	
				//si existe una session se redirecciona al test
				return Redirect::to('saludo');
				
			}
			else
			{
				return Redirect::to('login_partisipante')->with('login_partisipante', true);
			}
			
		}
		public function getLogout()
		{
			session_destroy();
        	return Redirect::to('/');
		}
	}
 ?>