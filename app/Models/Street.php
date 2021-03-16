<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Street extends Model
{
	use HasFactory;

	protected $hidden = [
		'created_at', 'updated_at'
	];

	public function cars()
	{
		return $this->hasManyThrough(Car::class, House::class);
	}
}
