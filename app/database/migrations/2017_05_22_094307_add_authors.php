<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAuthors extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::table('authors')->insert(array(
			'name'=>'Rishat Sultanov',
			'bio'=>'Good developer',
			'created_at'=>date('Y-m-d H:m:s'),
			'updated_at'=>date('Y-m-d H:m:s')
			));

		DB::table('authors')->insert(array(
			'name'=>'Rishat Sultanov2',
			'bio'=>'Good developer2',
			'created_at'=>date('Y-m-d H:m:s'),
			'updated_at'=>date('Y-m-d H:m:s')
			));
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		DB::table('authors')->where('name', '=', 'Rishat Sultanov')->delete();

				DB::table('authors')->where('name', '=', 'Rishat Sultanov2')->delete();
	}

}
