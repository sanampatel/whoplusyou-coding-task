<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class House extends Model
{
	use HasFactory;

	protected $hidden = [
		'created_at', 'updated_at'
	];

	protected $appends = ['full_address'];

	public function getFullAddressAttribute()
	{
		return "{$this->house_number} {$this->street->title} {$this->street->postal_code}, "
			. config('site.city') . " "
			. config('site.state');
	}

	public function street()
	{
		return $this->belongsTo(Street::class);
	}

	public function car()
	{
		return $this->hasOne(Car::class);
	}

	public function persons()
	{
		return $this->hasMany(Person::class);
	}
}
