<?php

    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Database\Migrations\Migration;

    class CreateTblAgencyAdmin extends Migration {

        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up()
        {
            Schema::create('tbl_agency_admin', function(Blueprint $table)
            {
                $table->increments('id');
                $table->text('familyName', 255);
                $table->text('giveName', 255);
                $table->text('middleName', 255);
                $table->dateTime('Birthday', 12);
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
                $table->text('cellphone_number', 25);
                $table->text('landline_number', 25);
                $table->text('email_address', 100);
                $table->text('image', 100)->nullable();
                $table->integer('agency_id')->unsigned();
            });

            Schema::table('tbl_agency_admin', function($table){
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
            Schema::drop('tbl_agency_admin');
        }

    }
