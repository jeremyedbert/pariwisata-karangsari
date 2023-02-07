<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
	use HasFactory;
	protected $fillable = [
		'photo',
		'caption',
		'admin_id'
	];

	public function admin() {
		return $this->belongsTo(Admin::class);
	}
}