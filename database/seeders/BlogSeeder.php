<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Blog::create([
			'admin_id' => 1,
			'title' => 'Apa itu Desa Lumeneng?',
			'slug' => 'apa-itu-desa-lumeneng',
			'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sed velit ac quam mattis commodo ut et sapien. Sed odio ex, ultricies ac hendrerit eu, malesuada ut leo. Nam placerat nulla lorem, id malesuada augue volutpat et. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum suscipit suscipit tempor. Phasellus ut viverra nulla, at ultricies mauris. Cras magna turpis, mattis tristique odio quis, convallis sollicitudin odio. Donec cursus ornare diam, eu scelerisque nisl ultrices eleifend.'
		]);
	}
}