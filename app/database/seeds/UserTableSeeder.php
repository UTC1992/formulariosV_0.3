<?php 
	Class UserTableSeeder extends Seeder{
		public function run()
		{
			DB::table('partisipantes')->delete();

			Partisipante::create(array(
					'cedula'=>'0503254849',
					'nombres'=>'Mauro Omar',
					'apellidos'=>'Guanoluisa Arciniega',
					'nivel_academico'=>'Tercero',
					'profesion'=>'Ing. Sistemas'
				));
			Partisipante::create(array(
					'cedula'=>'0503111111',
					'nombres'=>'Juan Pablo',
					'apellidos'=>'Perez',
					'nivel_academico'=>'Segundo',
					'profesion'=>'Ing. Contabilidad'
				));
			Partisipante::create(array(
					'cedula'=>'0502222222',
					'nombres'=>'Diego',
					'apellidos'=>'Mosquera',
					'nivel_academico'=>'Primero',
					'profesion'=>'Ing. Comercial'
				));
			

			/*	
			User::create(array(
					'cedula'=>'0503254849',
					'nombres'=>'Mauro Omar',
					'apellidos'=>'Guanoluisa Arciniega',
					'email'=>'omar.guanoluisa25@gmail.com',
					'direccion'=>'Calle Amazonas',
					'telefono'=>'0979208483',
					'username'=>'omar1993',
					'password'=>Hash::make('narutO25')
				));
			*/

			/*	
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
				*/
		}
	}
 ?>