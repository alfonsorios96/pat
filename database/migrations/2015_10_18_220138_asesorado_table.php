<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AsesoradoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('asesorados', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('asesorias')->default(0);
			$table->integer('tutorias')->default(0);
			$table->decimal('dinero', 5, 2)->default(0.0);
			$table->integer('usuario_id')->unsigned();
			$table->foreign('usuario_id')
					->references('id')
					->on('users')
					->onDelete('cascade');
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
		Schema::drop('asesorados');
	}

}
