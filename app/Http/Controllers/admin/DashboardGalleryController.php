<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;

class DashboardGalleryController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		return view('admin.galleries', [
			'galleries' => Gallery::all()
		]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		return view('admin.add_photo');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		// return $request->file('photo')->store('photo');
		$rules = [
			'caption' => 'required',
			'photo' => 'required|image|file|max:10240'
		];
		$validatedData = $request->validate($rules, [
			'caption.required' => 'Caption wajib diisi.',
			'photo.required' => 'Anda wajib mengunggah foto.',
			'photo.image' => 'File harus berupa gambar (.jpg, .png, .jpeg, dll).',
			'photo.max' => 'Ukuran maksimal 10 MB'
		]);

		$validatedData['admin_id'] = auth()->user()->id;
		$file = $request->file('photo');
		$filename = preg_replace('/[^A-Za-z0-9().\-]/', '_', $file->getClientOriginalName());
		$validatedData['photo'] = $request->file('photo')->storeAs('gallery', date('dmY_His') . '_' . $filename);
		Gallery::create($validatedData);

		return redirect()->route('admin.gallery')->with('success', 'Foto berhasil ditambahkan!');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Models\Gallery  $gallery
	 * @return \Illuminate\Http\Response
	 */
	public function show(Gallery $gallery)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Models\Gallery  $gallery
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Gallery $gallery)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Models\Gallery  $gallery
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, Gallery $gallery)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Models\Gallery  $gallery
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Gallery $gallery)
	{
		//
	}

// public function upload(Request $request)
// {
// 	if($request->hasFile('photo')) {
// 		$file = $request->file('photo');
// 		$filename = $file->getClientOriginalName();
// 		$folder = uniqid() . '-' . now()->timestamp;
// 		$file->storeAs('photo/tmp/'. $filename);

// 		return $folder;
// 	}
// 	return '';
// }
}