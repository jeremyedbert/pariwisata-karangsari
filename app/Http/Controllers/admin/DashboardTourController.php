<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Tour;
use Illuminate\Http\Request;

class DashboardTourController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		return view('admin.tour', [
			'tour' => Tour::where('id', '=', 1)->get()
		]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Models\Tour  $tour
	 * @return \Illuminate\Http\Response
	 */
	public function show(Tour $tour)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Models\Tour  $tour
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Tour $tour)
	{
		return view('admin.edit_tour', [
			'tour' => Tour::where('id', '=', 1)->get()
		]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Models\Tour  $tour
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, Tour $tour)
	{
		$rules = [
			'name' => 'required',
			'description' => 'required',
			'instagram' => 'required',
			'contact' => 'required',
			'open_hour' => 'required',
			'close_hour' => 'required',
			'adult_price' => 'required',
			'child_price' => 'required',
		];

		// $validatedData['admin_id'] = auth()->user()->id;
		$validatedData = $request->validate($rules);

		Tour::where('id', '=', 1)
			->update($validatedData);

		return redirect()->route('admin.tour')->with('success', 'Data berhasil diubah');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Models\Tour  $tour
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Tour $tour)
	{
		//
	}
}