<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('messages', function(Blueprint $table)
		{
			$table->increments('id');
                        $table->integer('userId');
                        $table->char('currencyFrom', 3);
                        $table->char('currencyTo', 3);
                        $table->double('amountSell', 15, 2);
                        $table->double('amountBuy', 15, 2);
                        $table->double('rate', 10, 5);
                        $table->dateTime('timePlaced');
                        $table->char('originatingCountry', 2);
                        $table->timestamps();

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('messages', function(Blueprint $table)
		{
			 Schema::drop('messages');
		});
	}

}
