<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
	use HasFactory;

	protected $fillable = [
		'name',
		'description',
		'open_hour',
		'close_hour',
		'adult_price',
		'child_price',
		'location'
	];

	public function admin()
	{
		return $this->belongsTo(Admin::class);
	}
}