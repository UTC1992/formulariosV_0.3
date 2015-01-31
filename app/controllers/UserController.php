<?php 
	
	class UserController extends BaseController
	{
		public function __construct()
		{
			//$this->beforeFilter('auth');
		}
		
		public function getIndex()
		{
			//optener datos
			$alias = Auth::user()->username;
			$user = DB::table('users')->where('username',$alias)->first();
			return View::make('admin.perfil')->with('user',$user);
		}

		public function postCreate()
		{
			$reglas = array(
				'cedula' => 'required|max:10|unique:users',
				'nombres' => 'required|max:50',
				'apellidos' => 'required|max:70',
				'email' => 'required|max:200|unique:users',
				'direccion' => 'required|max:200',
				'telefono' => 'required|min:9|max:10',
				'username' => 'required|min:3|unique:users',
				'password' => 'required|min:6'
				);

			$validacion = Validator::make(Input::all(),$reglas);
			if ($validacion->fails()) 
			{
				//return View::make('registroAdmin')->with('status','no_create');
				return Redirect::to('registroAdmin')->withErrors($validacion);
				//return Redirect::to('registroAdmin')->with('status','no_create');
			}

			$admin = new User;

			$admin->cedula = Input::get('cedula');
			$admin->nombres = Input::get('nombres');
			$admin->apellidos = Input::get('apellidos');
			$admin->email = Input::get('email');
			$admin->direccion = Input::get('direccion');
			$admin->telefono = Input::get('telefono');
			$admin->username = Input::get('username');
			$admin->password = Hash::make(Input::get('password'));

			$admin->save();

			//return Redirect::to('comenzar')->with('status','ok_create');
			return Redirect::to('/')->with('status','ok_create');
		}

		public function getDelete()
		{

		}

		public function postUpdate()
		{
			
		}
		
	}
 ?>