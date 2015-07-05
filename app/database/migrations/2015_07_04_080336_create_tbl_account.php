<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblAccount extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbl_account', function(Blueprint $table)
		{
			$table->increments('id');
            $table->text('Username', 50);
            $table->text('Password', 50);
            $table->rememberToken()->nullable();
            $table->dateTime('Date_created', 12);
            $table->text('Account_type', 50);
            $table->text('Account_status', 50);
            $table->integer('owner_id')->unsigned();
		});

        Schema::table('tbl_account', function($table){
            $table->foreign('owner_id')->references('id')->on('tbl_admin');
            $table->foreign('owner_id')->references('client_id')->on('tbl_client');
            $table->foreign('owner_id')->references('id')->on('tbl_agency_admin');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tbl_account');
	}

}
