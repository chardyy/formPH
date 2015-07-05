<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblAgency extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbl_agency', function(Blueprint $table)
		{
			$table->increments('id');
            $table->text('companyName', 255);
            $table->dateTime('company_startDate', 12);
            $table->text('company_street_address', 255);
            $table->text('company_barangay', 255);
            $table->text('company_city', 255);
            $table->text('company_province', 255);
            $table->text('company_status', 50);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tbl_agency');
	}

}
