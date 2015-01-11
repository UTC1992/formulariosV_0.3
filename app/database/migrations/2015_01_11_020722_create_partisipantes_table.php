<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartisipantesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('partisipantes', function(Blueprint $table)
		{
			$table->increments('id')->unique();
			$table->string('cedula')->unique();
			$table->string('nombres');
			$table->string('apellidos');
			$table->string('nivel_academico');
			$table->string('profesion');
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
		Schema::drop('partisipantes');
	}

}
