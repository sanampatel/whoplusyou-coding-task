<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

use Spatie\QueryBuilder\QueryBuilder;
use Spatie\QueryBuilder\AllowedFilter;

class CarController extends Controller
{
	public function index(Request $request)
	{
		// Service classes and responses not used cause of app size
		return QueryBuilder::for(Car::class)
			->allowedFilters([
				AllowedFilter::exact('license_plate')
			])
			->allowedIncludes(['house', 'house.persons', 'house.street'])
			->get();
	}
}
