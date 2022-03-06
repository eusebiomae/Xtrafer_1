<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactEmailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('contact_email')) {
			Schema::create('contact_email', function (Blueprint $table) {
				$table->increments('id');
                $table->string('name', 255);
                $table->string('email', 255);
                $table->string('company', 255);
                $table->string('phone', 45)->nullable();
                $table->string('subject', 255);
                $table->longText('content')->nullable();
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
        //
    }
}
