<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tests', function(Blueprint $table)
		{
			$table->increments('Cod_Tst')->unique();
			$table->integer('Cod_App')->unsigned();
			$table->integer('Cod_U')->unsigned();
			$table->integer('Cod_F')->unsigned();
			$table->integer('Cod_A')->unsigned();
			$table->foreign('Cod_App')->references('Cod_App')->on('aplicaciones')->onDelete('cascade')->onUpdate('cascade');
			$table->foreign('Cod_U')->references('Cod_U')->on('usuarios')->onDelete('cascade')->onUpdate('cascade');
			$table->foreign('Cod_F')->references('Cod_F')->on('formularios')->onDelete('cascade')->onUpdate('cascade');
			$table->foreign('Cod_A')->references('Cod_A')->on('administradores')->onDelete('cascade')->onUpdate('cascade');
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
		Schema::drop('tests');
	}

}
