<?php 
	
	class PartisipanteLogin extends BaseController{
		public function Partisipante()
		{

			$datoSession = Input::get('cedula');
			$partisipante = DB::table('partisipantes')->where('cedula',$datoSession)->first();

			if($partisipante)
			{
				//iniciar session 
				session_start();
				
				if (!isset($_SESSION['cedula'])) {
					//crear unsa session con el dato cedula
					$_SESSION['cedula'] = $datoSession;
				}
	
				//comprobar si la variable de session esta vacia
				if (empty($_SESSION['cedula'])) 
				{
					//si la avriable de session esta vacia se redirecciona a index
					return Redirect::to('/');
				}	
				//si la avriable de session esta iniciada se redirecciona al test
				//return $_SESSION['cedula'];
				return Redirect::to('saludo')->with('cedula',$datoSession);
				
			}
			else
			{
				return Redirect::to('login_partisipante')->with('login_partisipante', true);
			}
			
		}
		public function getLogout()
		{
			unset($_SESSION['cedula']);
        	return Redirect::to('/');
		}
	}
 ?>