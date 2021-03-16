<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;

use Spatie\QueryBuilder\QueryBuilder;
use Spatie\QueryBuilder\AllowedFilter;

class PersonController extends Controller
{
	public function index(Request $request)
	{
		return QueryBuilder::for(Person::class)
			->allowedFilters([
				AllowedFilter::exact('name')
			])
			->allowedIncludes(['house', 'house.street', 'house.car'])
			->allowedAppends(['age'])
			->paginate(10);
	}
}
