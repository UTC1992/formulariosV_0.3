<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormulariosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('formularios', function(Blueprint $table)
		{
			$table->increments('Cod_F')->unique();
			$table->string('Nombre_F',45)->unique();
			$table->string('Indicaciones_F',300);
			$table->DateTime('Fecha_F');
			$table->string('Comentarios_F',300);
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
		Schema::drop('formularios');
	}

}
