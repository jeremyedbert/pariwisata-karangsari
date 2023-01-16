<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tours', function (Blueprint $table) {
			$table->id();
			$table->foreignId('admin_id');
			$table->string('name');
			$table->string('contact');
			$table->string('instagram');
			$table->text('description');
			$table->string('open_hour');
			$table->string('close_hour');
			$table->integer('adult_price');
			$table->integer('child_price');
			$table->string('location');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('tours');
	}
};