<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetallesTareasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('detalles_tareas', function(Blueprint $table)
		{
			$table->increments('Cod_DT')->unique();
			$table->integer('Cod_T')->unsigned();
			$table->time('Cronometro');
			$table->string('Estado',15);
			$table->string('Nota',200);
			$table->foreign('Cod_T')->references('Cod_T')->on('tareas')->onDelete('cascade')->onUpdate('cascade');
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
		Schema::drop('detalles_tareas');
	}

}
