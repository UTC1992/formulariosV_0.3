<?php 
	
	class UserController extends BaseController
	{
		public function __construct()
		{
			$this->beforeFilter('auth');
		}

		public function getIndex()
		{
			$my_id = Auth::user()->id;
			$level = Auth::user()->level;
			//control para permitir el acceso
			if ($level==1) 
			{
				$users = DB::table('users')->where('level','<>','1')->where('id','<>',$my_id)->get();
				return View::make('admin.index')->with('users',$users);
			}
			else
			{
				return View::make('error.access_denied_ad');
			}
		}
	}
 ?>