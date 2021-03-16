<?php

namespace Database\Factories;

use App\Models\Car;
use App\Models\House;
use Illuminate\Database\Eloquent\Factories\Factory;

class CarFactory extends Factory
{
	/**
	 * The name of the factory's corresponding model.
	 *
	 * @var string
	 */
	protected $model = Car::class;

	/**
	 * Define the model's default state.
	 *
	 * @return array
	 */
	public function definition()
	{
		return [
			'house_id' => House::factory(),
			'license_plate' => $this->faker->unique()->regexify('[A-Z]{4} [0-9]{3}'),
			'brand' => $this->faker->randomElement(['Honda', 'BMW', 'Audi', 'Ford']),
			'color' => $this->faker->colorName(),
		];
	}
}
