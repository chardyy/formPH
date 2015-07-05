<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblClientForm extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbl_client_form', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('Form_id')->unsigned();
            $table->integer('User_id')->unsigned();
            $table->text('Form_name', 255);
            $table->boolean('Qr_code')->nullable();
            $table->dateTime('Date_accomplished');
            $table->text('status', 255);
		});

        Schema::table('tbl_client_form', function($table){
            $table->foreign('Form_id')->references('id')->on('tbl_form');
            $table->foreign('User_id')->references('client_id')->on('tbl_client');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tbl_client_form');
	}

}
