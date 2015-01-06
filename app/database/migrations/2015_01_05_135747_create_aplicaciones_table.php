<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAplicacionesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('aplicaciones', function(Blueprint $table)
		{
			$table->increments('Cod_App')->unique();
			$table->string('Nombre_App',60)->unique();
			$table->string('Tipo_App',25);
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
		Schema::drop('aplicaciones');
	}

}
