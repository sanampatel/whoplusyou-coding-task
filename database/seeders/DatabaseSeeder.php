<?php

namespace Database\Seeders;

use App\Models\Car;
use App\Models\House;
use App\Models\Person;
use App\Models\Street;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
	/**
	 * Seed the application's database.
	 *
	 * @return void
	 */
	public function run()
	{
		$streets = Street::factory(10)->create();

		foreach ($streets as $street) {
			$houses = House::factory()->count(10)->create([
				'street_id' => $street->id
			]);

			foreach ($houses as $house) {
				Person::factory()->count(5)->create([
					'house_id' => $house->id
				]);

				Car::factory()->create([
					'house_id' => $house->id
				]);
			}
		}
	}
}
