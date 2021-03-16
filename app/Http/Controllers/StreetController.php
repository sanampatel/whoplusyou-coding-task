<?php

namespace App\Http\Controllers;

use App\Models\Street;
use Illuminate\Http\Request;

use Spatie\QueryBuilder\QueryBuilder;

class StreetController extends Controller
{
	public function index(Request $request)
	{
		return QueryBuilder::for(Street::class)
			->where('title', $request->street_name)
			->allowedIncludes(['cars'])
			->get();
	}
}
