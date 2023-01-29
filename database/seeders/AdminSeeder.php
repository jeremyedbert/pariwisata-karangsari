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
			'password' => bcrypt('novinasukha')
		]);
		Admin::create([
			'username' => 'pakcarik',
			'password' => bcrypt('pakcarik')
		]);
	}
}