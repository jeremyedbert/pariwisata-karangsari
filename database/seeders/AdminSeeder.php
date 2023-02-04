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
			'username' => 'pakcarik',
			'name' => 'Pak Carik',
			'password' => bcrypt('pakcarik')
		]);
		Admin::create([
			'username' => 'adminadmin',
			'name' => 'Admin',
			'password' => bcrypt('adminadmin')
		]);
	}
}