<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('reportes', function(Blueprint $table)
		{
			$table->increments('Cod_R')->unique();
			/*
			$table->integer('Cod_Tst')->unsigned();
			$table->foreign('Cod_Tst')->references('Cod_Tst')->on('tests')->onDelete('cascade')->onUpdate('cascade');
			*/
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
		Schema::drop('reportes');
	}

}
