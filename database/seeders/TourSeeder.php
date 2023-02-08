<?php

namespace Database\Seeders;

use App\Models\Tour;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TourSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Tour::create([
			'admin_id' => '1',
			'name' => 'Wisata Dusun Kaliwisnu',
			'contact' => '08123456789',
			'instagram' => 'instagram',
			'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sed velit ac quam mattis commodo ut et sapien. Sed odio ex, ultricies ac hendrerit eu, malesuada ut leo. Nam placerat nulla lorem, id malesuada augue volutpat et. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum suscipit suscipit tempor. Phasellus ut viverra nulla, at ultricies mauris. Cras magna turpis, mattis tristique odio quis, convallis sollicitudin odio. Donec cursus ornare diam, eu scelerisque nisl ultrices eleifend. Maecenas iaculis, diam in varius convallis, purus risus malesuada velit, quis finibus leo ex sit amet enim. Duis pretium placerat purus eget condimentum. Aenean arcu.',
			'open_hour' => '09.00',
			'close_hour' => '19.00',
			'adult_price' => '40000',
			'child_price' => '10000',
			'location' => 'Desa Lumeneng'
		]);
	}
}