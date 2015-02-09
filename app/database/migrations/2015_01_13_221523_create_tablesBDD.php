<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablesBDD extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id')->unique();
			$table->string('cedula',10)->unique();
			$table->string('nombres',50);
			$table->string('apellidos',70);
			$table->string('email',200);
			$table->string('direccion',200);
			$table->string('telefono',15);
			$table->string('username')->unique();
			$table->string('password');
			$table->timestamps();
		});

		Schema::create('aplicaciones', function(Blueprint $table)
		{
			$table->increments('id')->unique();
			$table->string('nombre',200)->unique();
			$table->string('tipo',60);
		
			$table->timestamps();
		});	
		
		Schema::create('formularios', function(Blueprint $table)
		{
			$table->increments('id')->unique();
			$table->string('nombre');
			$table->string('indicaciones',1000);
			$table->timestamps();
		});

		Schema::create('tests', function(Blueprint $table)
		{
			$table->increments('id')->unique();
			$table->integer('users_id')
				->foreign('users_id')
				->references('id')
				->on('users')
				->onDelete('cascade')
				->onUpdate('cascade')
				->unsigned();
			$table->string('estado');
			//aplicacion
			$table->integer('app_id')
				->foreign('app_id')
				->references('id')
				->on('aplicaciones')
				->onDelete('cascade')
				->onUpdate('cascade')
				->unsigned();
			$table->integer('form_id')
				->foreign('form_id')
				->references('id')
				->on('formularios')
				->onDelete('cascade')
				->onUpdate('cascade')
				->unsigned();
	/*		//usuarios
			$table->integer('partisipantes_id')
				->foreign('partisipantes_id')
				->references('id')
				->on('partisipantes')
				->onDelete('cascade')
				->onUpdate('cascade')
				->unsigned();
				//administrador
			$table->integer('users_id')
				->foreign('users_id')
				->references('id')
				->on('users')
				->onDelete('cascade')
				->onUpdate('cascade')
				->unsigned();
			
	*/
			$table->timestamps();
		});
		
		Schema::create('ambitos', function(Blueprint $table)
		{
			$table->increments('id')->unique();
			$table->string('nombre',1000);
			$table->timestamps();
		});

		Schema::create('tareas', function(Blueprint $table)
		{
			$table->increments('id')->unique();
			$table->string('enunciado',1000);
			$table->integer('form_id')
				->foreign('form_id')
				->references('id')
				->on('formularios')
				->onDelete('cascade')
				->onUpdate('cascade')
				->unsigned();
			$table->integer('ambitos_id')
				->foreign('ambitos_id')
				->references('id')
				->on('ambitos')
				->onDelete('cascade')
				->onUpdate('cascade')
				->unsigned();
			$table->timestamps();
		});

		Schema::create('partisipantes', function(Blueprint $table)
		{
			$table->increments('id')->unique();
			$table->string('cedula',10)->unique();
			$table->string('nombres',50);
			$table->string('apellidos',70);
			$table->string('nivel_academico',45);
			$table->string('profesion',45);
			//test
			$table->integer('tests_id')
				->foreign('tests_id')
				->references('id')
				->on('tests')
				->onDelete('cascade')
				->onUpdate('cascade')
				->unsigned()->nullable();
			$table->timestamps();
		});

		Schema::create('detalle_tareas', function(Blueprint $table)
		{
			$table->increments('id')->unique();
			$table->string('respuesta',60);

			$table->integer('tareas_id')
				->foreign('tareas_id')
				->references('id')
				->on('tareas')
				->onDelete('cascade')
				->onUpdate('cascade')
				->unsigned();

			$table->integer('partisipantes_id')
				->foreign('partisipantes_id')
				->references('id')
				->on('partisipantes')
				->onDelete('cascade')
				->onUpdate('cascade')
				->unsigned();

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
		Schema::drop('users');
		Schema::drop('aplicaciones');
		Schema::drop('partisipantes');
		Schema::drop('formularios');
		Schema::drop('tareas');
		Schema::drop('detalle_tareas');
		Schema::drop('tests');
	}

}
