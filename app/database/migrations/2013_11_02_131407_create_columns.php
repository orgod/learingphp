<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateColumns extends Migration {


	public function up()
	{
		Schema::create('columns', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('columns_name');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('columns');
	}

}
