<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class DashboardAdminController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		return view('admin.setting', [
			'admins' => Admin::all()
		]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		return view('admin.add_admin');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		$username = str_replace(' ', '', $request->username);
		$rules = [
			'username' => ['required', Rule::unique('admins', 'username'), 'lowercase'],
			'name' => 'required',
			'password' => 'required|min:6|max:30',
			'password_confirm' => 'required|same:password',
			'password_admin' => 'required|current_password:admin'
		];
		$validatedData = $request->validate($rules, [
			'username.required' => 'Username wajib diisi.',
			'username.unique' => 'Username sudah dipakai oleh pengguna lain.',
			'username.lowercase' => 'Username harus menggunakan huruf kecil.',
			'name.required' => 'Nama wajib diisi.',
			'password.required' => 'Password wajib diisi.',
			'password.min' => 'Password minimal 6 karakter.',
			'password.max' => 'Password maksimal 30 karakter.',
			'password_confirm.required' => 'Password konfirmasi wajib diisi.',
			'password_confirm.same' => 'Password konfirmasi tidak sesuai.',
			'password_admin.required' => 'Anda wajib mengisi password.',
			'password_admin.current_password' => 'Password Anda tidak sesuai'
		]);

		$admin = new Admin();
		$admin->name = $request->name;
		$admin->username = $username;
		$admin->password = bcrypt($request->password);

		$storeAdmin = $admin->save();

		if ($storeAdmin) {
			return redirect()->route('admin.setting')->with('success', 'Admin berhasil ditambahkan');
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Models\Admin  $admin
	 * @return \Illuminate\Http\Response
	 */
	public function show(Admin $admin)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Models\Admin  $admin
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Admin $admin)
	{
		return view('admin.edit_admin', [
			'admin' => $admin
		]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Models\Admin  $admin
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, Admin $admin)
	{
		$username = str_replace(' ', '', $request->username);
		if ($request->password == '') {
			$rules = [
				'username' => ['required', Rule::unique('admins', 'username')->ignore($admin->id), 'lowercase'],
				'name' => 'required',
				'password_admin' => 'required|min:6|max:30|current_password:admin'
			];
			$validatedData = $request->validate($rules, [
				'username.required' => 'Harap mengisi username.',
				'username.unique' => 'Username sudah dipakai oleh pengguna lain.',
				'username.lowercase' => 'Username harus menggunakan huruf kecil.',
				'name.required' => 'Nama wajib diisi.',
				'password_admin.min' => 'Password minimal 6 karakter.',
				'password_admin.max' => 'Password maksimal 30 karakter.',
				'password_admin.required' => 'Anda wajib mengisi password.',
				'password_admin.current_password' => 'Password Anda tidak sesuai.'
			]);

			Admin::where('id', $admin->id)->update([
				'username' => $username,
				'name' => $request->name
			]);

		} else {
			$rules = [
				'username' => ['required', Rule::unique('admins', 'username')->ignore($admin->id), 'lowercase'],
				'name' => 'required',
				'password' => 'min:6|max:30',
				'password_confirm' => 'required|same:password',
				'password_admin' => 'required|current_password:admin'
			];
			$validatedData = $request->validate($rules, [
				'username.required' => 'Username wajib diisi.',
				'username.unique' => 'Username sudah dipakai oleh pengguna lain.',
				'username.lowercase' => 'Username harus menggunakan huruf kecil.',
				'name.required' => 'Nama wajib diisi.',
				'password.min' => 'Password minimal 6 karakter.',
				'password.max' => 'Password maksimal 30 karakter.',
				'password_confirm.required' => 'Password konfirmasi wajib diisi.',
				'password_confirm.same' => 'Password konfirmasi tidak sesuai.',
				'password_admin.required' => 'Anda wajib mengisi password.',
				'password_admin.current_password' => 'Password Anda tidak sesuai'
			]);

			Admin::where('id', $admin->id)->update([
				'username' => $username,
				'name' => $request->name
			]);
		}

		return redirect()->route('admin.setting')->with('success', 'Data ' . $admin->username . ' berhasil diubah');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Models\Admin  $admin
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Admin $admin)
	{
		//
	}
}