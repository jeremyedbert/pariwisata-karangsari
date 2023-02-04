<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
	public function index()
	{
		return view('admin.login');
	}

	public function authenticate(Request $request)
	{
		$rules = [
			'username' => 'required|exists:admins,username',
			'password' => 'required|min:6|max:30'
		];

		$credentials = $request->validate($rules, [
			'username.required' => 'Harap mengisi username.',
			'username.exists' => 'Username tidak ditemukan.',
			'password.required' => 'Harap mengisi password.',
			'password.min' => 'Password minimal 6 karakter.',
			'username.max' => 'Password maksimal 30 karakter.'
		]);

		if (Auth::guard('admin')->attempt($credentials)) {
			$request->session()->regenerate();
			return redirect()->route('admin.dashboard');
		}

		return back()->with('loginError', 'Password salah!')->withInput();
	}

	public function logout(Request $request)
	{
		Auth::logout();
		$request->session()->invalidate();
		$request->session()->regenerateToken();
		return redirect()->route('admin.login');
	}
}