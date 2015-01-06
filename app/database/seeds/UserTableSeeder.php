<?php 
	Class UserTableSeeder extends Seeder{
		public function run()
		{
			DB::table('users')->delete();

			User::create(array(
					'name'=>'Omar',
					'last_name'=>'Guanoluisa',
					'email'=>'omar.guanoluisa25@gmail.com',
					'address'=>'Calle Amazonas',
					'phone'=>979208483,
					'username'=>'omar25',
					'level'=>0,
					'password'=>Hash::make('narutO25')
				));

			//llenamos los campos para otro usuario
			User::create(array(
					'name'=>'Estefania',
					'last_name'=>'Gualpa',
					'email'=>'nellygualpa04@gmail.com',
					'address'=>'Calle Amazonas',
					'phone'=>958768521,
					'username'=>'nelly04',
					'level'=>1,
					'password'=>Hash::make('estefy1993')
				));
		}
	}
 ?>