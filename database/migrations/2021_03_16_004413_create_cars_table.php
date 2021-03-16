<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cars', function (Blueprint $table) {
			$table->id();
			$table->foreignId('house_id')
				->constrained()
				->onDelete('cascade')
				->unique();
			$table->string('license_plate', 20);
			$table->string('brand', 50);
			$table->string('color', 50);
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
		Schema::dropIfExists('cars');
	}
}
