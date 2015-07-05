<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblClient extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbl_client', function(Blueprint $table)
		{
            $table->increments('client_id');
            $table->text('familyName', 255);
            $table->text('giveName', 255);
            $table->text('middleName', 255);
            $table->dateTime('Birthday', 12);
            $table->text('Place_of_birth', 255);
            $table->text('gender', 5);
            $table->text('Nationality', 255);
            $table->text('Civil_status', 25);
            $table->text('current_street_address', 255);
            $table->text('current_house_number', 50);
            $table->text('current_barangay', 100);
            $table->text('current_city', 100);
            $table->text('current_province', 100);
            $table->text('current_zipcode', 25);
            $table->text('current_country', 100);
            $table->text('prov_street_address', 100)->nullable();
            $table->text('prov_house_number', 50)->nullable();
            $table->text('prov_barangay', 100)->nullable();
            $table->text('prov_province', 100)->nullable();
            $table->text('religion', 100);
            $table->text('fathers_name', 255);
            $table->text('fathers_occupation', 100);
            $table->text('mothers_name', 255);
            $table->text('mothers_occupation', 100);
            $table->text('blood_type', 5);
            $table->text('height', 10);
            $table->text('weight', 10);
            $table->text('cellphone_number', 25)->nullable();
            $table->text('landline_number', 25)->nullable();
            $table->text('email_address', 100);
            $table->text('image', 100)->nullable();
            $table->text('eSignature', 100);
            $table->text('Thumbmark', 100);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tbl_client');
	}

}
