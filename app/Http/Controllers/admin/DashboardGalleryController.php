<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
			'photo' => 'required|image|file|max:8192'
		];
		$validatedData = $request->validate($rules, [
			'caption.required' => 'Caption wajib diisi.',
			'photo.required' => 'Anda wajib mengunggah foto.',
			'photo.image' => 'File harus berupa gambar (.jpg, .png, .jpeg, dll).',
			'photo.max' => 'Ukuran maksimal 8 MB'
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
		return view('admin.edit_photo', [
			'photo' => $gallery
		]);
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
		$rules = [
			'caption' => 'required'
		];

		$validatedData = $request->validate($rules, [
			'caption.required' => 'Caption wajib diisi.'
		]);

		Gallery::where('id', $gallery->id)
			->update($validatedData);

		return redirect()->route('admin.gallery')->with('success', 'Caption berhasil diubah');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Models\Gallery  $gallery
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Gallery $gallery)
	{
		Gallery::destroy($gallery->id);
		Storage::delete($gallery->photo);
		return redirect()->route('admin.gallery')->with('success', 'Foto berhasil dihapus.');
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