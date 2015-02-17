<?php 
	
	class UserLogin extends BaseController{
		public function user()
		{
			$userdata = array(
				'username'=>Input::get('username'),
				'password'=>Input::get('password')
			);
			if(Auth::attempt($userdata))
			{
				//nos logeamos como administrador
				//return View::make('hello');
				//return "entraste";
				return Redirect::to('index_admin');
			}
			else
			{
				return Redirect::to('/')->with('login_errors', true);
			}
			return Redirect::to("index_admin");
		}
		public function getLogout()
		{
			  //Desconctamos al usuario
       		Auth::logout();

        	//Redireccionamos al inicio de la app con un mensaje
        	return Redirect::to('/');
		}
	}
 ?>