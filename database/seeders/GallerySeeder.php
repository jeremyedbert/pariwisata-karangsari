<?php

namespace Database\Seeders;

use App\Models\Gallery;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GallerySeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Gallery::create([
			'admin_id' => '1',
			'photo' => 'images/img1.jpg',
			'caption' => 'Perangkat Desa menyampaikan Situasi Terkini Desa Lumeneng'
		]);
		Gallery::create([
			'admin_id' => '2',
			'photo' => 'images/img2.jpg',
			'caption' => 'Proker Bodong Ilhamy: Menyampaikan Sosialisasi Budaya Kuntul'
		]);
		Gallery::create([
			'admin_id' => '1',
			'photo' => 'images/img3.jpg',
			'caption' => 'Balai Desa Lumeneng'
		]);
		Gallery::create([
			'admin_id' => '1',
			'photo' => 'images/img4.jpg',
			'caption' => 'Berkunjung ke Salah Satu Rumah Warga'
		]);
		Gallery::create([
			'admin_id' => '2',
			'photo' => 'images/img5.jpg',
			'caption' => 'Gunung Kembar di Sumingkir'
		]);
		Gallery::create([
			'admin_id' => '3',
			'photo' => 'images/img6.jpg',
			'caption' => 'Pemandangan Dusun Karangsari'
		]);
	}
}