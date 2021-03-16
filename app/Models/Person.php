<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
	use HasFactory;

	protected $table = 'people';

	protected $hidden = [
		'created_at', 'updated_at'
	];

	protected $casts = [
		'date_of_birth' => 'date:d-m-Y',
	];

	// Not required all times so include when needed
	// protected $appends = ['age']; 

	public function getAgeAttribute()
	{
		return Carbon::parse($this->attributes['date_of_birth'])->age;
	}

	public function house()
	{
		return $this->belongsTo(House::class);
	}
}
