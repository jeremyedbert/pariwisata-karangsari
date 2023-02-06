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
			'photo' => 'gallery/img_1.jpg',
			'caption' => 'Perangkat Desa menyampaikan Situasi Terkini Desa Lumeneng'
		]);
		Gallery::create([
			'admin_id' => '2',
			'photo' => 'gallery/img_2.jpg',
			'caption' => 'Proker Bodong Ilhamy: Menyampaikan Sosialisasi Budaya Kuntul'
		]);
		Gallery::create([
			'admin_id' => '1',
			'photo' => 'gallery/img_3.jpg',
			'caption' => 'Balai Desa Lumeneng'
		]);
		Gallery::create([
			'admin_id' => '1',
			'photo' => 'gallery/img_4.jpg',
			'caption' => 'Berkunjung ke Salah Satu Rumah Warga'
		]);
		Gallery::create([
			'admin_id' => '2',
			'photo' => 'gallery/img_5.jpg',
			'caption' => 'Gunung Kembar di Sumingkir'
		]);
		Gallery::create([
			'admin_id' => '3',
			'photo' => 'gallery/img_6.jpg',
			'caption' => 'Pemandangan Dusun Karangsari'
		]);
	}
}