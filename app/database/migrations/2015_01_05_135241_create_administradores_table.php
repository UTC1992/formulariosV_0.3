<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdministradoresTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('administradores', function(Blueprint $table)
		{
			$table->increments('Cod_A')->unique();
			$table->string('Nombres_A',60);
			$table->string('Apellidos_A',70);
			$table->string('Cedula_A',10)->unique();
			$table->string('NickName_A',15)->unique();
			$table->string('Password_A');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('administradores');
	}

}
