<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use Illuminate\Http\Request;

class ContactController extends Controller
{
  public function index() {
		// dd(Tour::where('id', 1)->get());
		return view('user.contact', [
			'tour' => Tour::where('id', 1)->get()
		]);
	}
}
