<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Admin::create([
			'username' => 'novinasukha',
			'name' => 'Novi Nasukha',
			'password' => bcrypt('novinasukha')
		]);
		Admin::create([
			'username' => 'uripwidodo',
			'name' => 'Urip Widodo',
			'password' => bcrypt('uripwidodo')
		]);
		Admin::create([
			'username' => 'zainalarifin',
			'name' => 'Zainal Arifin',
			'password' => bcrypt('zainalarifin')
		]);
	}
}