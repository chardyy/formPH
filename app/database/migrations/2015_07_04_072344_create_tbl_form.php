<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblForm extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbl_form', function(Blueprint $table)
		{
			$table->increments('id');
			$table->dateTime('Form_created', 12);
			$table->text('Form_Name', 255);
			$table->text('Form_Status', 50);
            $table->integer('agency_id')->unsigned();
		});

        Schema::table('tbl_form', function($table){
           $table->foreign('agency_id')->references('id')->on('tbl_agency');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tbl_form');
	}

}
