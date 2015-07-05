<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblSubscriptions extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbl_subscriptions', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('AgencyID')->unsigned();
            $table->integer('SubscriptionPlanID')->unsigned();
            $table->dateTime('DateSubscribed', 12);
            $table->dateTime('startDate', 12);
            $table->dateTime('endDate', 12);
            $table->float('subscriptionAmt');
            $table->text('Status', 50);

		});

        Schema::table('tbl_subscriptions', function($table){
           $table->foreign('AgencyID')->references('id')->on('tbl_agency');
           $table->foreign('SubscriptionPlanID')->references('id')->on('tbl_subscription_plans');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('create_tbl_subscriptions');
	}

}
