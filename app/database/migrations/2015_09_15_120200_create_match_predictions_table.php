<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatchPredictionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('match_predictions', function(Blueprint $table)
		{
			$table->increments('id');

			$table->integer('entry_id')->unsigned();

			$table->string('team_a', 30);
			$table->string('team_b', 30);
			$table->string('pool',   1);
			$table->date('match_date');
			$table->string('result', 30)->default('Draw');

			$table->timestamps();

			$table->foreign('entry_id')
				    ->references('id')->on('entries')
				    ->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('match_predictions');
	}

}
