<?php

namespace Database\Factories;

use App\Models\House;
use App\Models\Street;
use Illuminate\Database\Eloquent\Factories\Factory;

class HouseFactory extends Factory
{
	/**
	 * The name of the factory's corresponding model.
	 *
	 * @var string
	 */
	protected $model = House::class;

	/**
	 * Define the model's default state.
	 *
	 * @return array
	 */
	public function definition()
	{
		return [
			'street_id' => Street::factory(),
			'house_number' => $this->faker->unique()->randomNumber(),
			'postal_code' => $this->faker->postcode(),
		];
	}
}
