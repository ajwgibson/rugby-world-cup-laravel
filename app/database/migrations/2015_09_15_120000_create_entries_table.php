<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('entries', function(Blueprint $table)
		{
			$table->increments('id');

			$table->string('email', 100);
			$table->string('secret', 64);

			$table->string('confirmation', 25)->nullable();

			$table->string('first_name', 100);
			$table->string('last_name', 100);

			$table->string('peer_group', 100)->nullable();

			$table->integer('score')->unsigned()->default(0);

			$table->string('pa_1', 30)->nullable();
			$table->string('pa_2', 30)->nullable();
			$table->string('pa_3', 30)->nullable();
			$table->string('pa_4', 30)->nullable();
			$table->string('pa_5', 30)->nullable();

			$table->string('pb_1', 30)->nullable();
			$table->string('pb_2', 30)->nullable();
			$table->string('pb_3', 30)->nullable();
			$table->string('pb_4', 30)->nullable();
			$table->string('pb_5', 30)->nullable();

			$table->string('pc_1', 30)->nullable();
			$table->string('pc_2', 30)->nullable();
			$table->string('pc_3', 30)->nullable();
			$table->string('pc_4', 30)->nullable();
			$table->string('pc_5', 30)->nullable();

			$table->string('pd_1', 30)->nullable();
			$table->string('pd_2', 30)->nullable();
			$table->string('pd_3', 30)->nullable();
			$table->string('pd_4', 30)->nullable();
			$table->string('pd_5', 30)->nullable();

			$table->string('f8_1', 30)->nullable();
			$table->string('f8_2', 30)->nullable();
			$table->string('f8_3', 30)->nullable();
			$table->string('f8_4', 30)->nullable();
			$table->string('f8_5', 30)->nullable();
			$table->string('f8_6', 30)->nullable();
			$table->string('f8_7', 30)->nullable();
			$table->string('f8_8', 30)->nullable();

			$table->string('f4_1', 30)->nullable();
			$table->string('f4_2', 30)->nullable();
			$table->string('f4_3', 30)->nullable();
			$table->string('f4_4', 30)->nullable();

			$table->string('f2_1', 30)->nullable();
			$table->string('f2_2', 30)->nullable();

			$table->string('winner', 30)->nullable();

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
		Schema::drop('entries');
	}

}
