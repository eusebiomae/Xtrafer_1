<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlaceTable extends Migration
{
	/**
	* Run the migrations.
	*
	* @return void
	*/
	public function up()
	{
		if (!Schema::hasTable('place')) {
			Schema::create('place', function (Blueprint $table) {
				$table->increments('id');
				$table->string('description', 512)->nullable();
				$table->integer('created_by')->nullable();
				$table->integer('updated_by')->nullable();
				$table->integer('deleted_by')->nullable();
				$table->timestamps();
				$table->softDeletes();
			});
		}
	}

	/**
	* Reverse the migrations.
	*
	* @return void
	*/
	public function down()
	{
		Schema::dropIfExists('place');
	}
}
