<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
	use HasFactory;
	protected $fillable = [
		'username',
		'password'
	];

	public function blog() {
		return $this->hasMany(Blog::class, 'admin_id');
	}

	public function tour() {
		return $this->hasOne(Tour::class);
	}

	public function gallery() {
		return $this->hasMany(Gallery::class, 'admin_id');
	}
}