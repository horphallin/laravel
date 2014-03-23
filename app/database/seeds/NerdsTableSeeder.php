<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class NerdsTableSeeder extends Seeder {

	public function run()
	{
		DB::table('nerds')->delete();
		Nerd::create(array(
			'name' => 'Chris Sevilleja',
			'email' => 'chris@scotch.io',
			'nerd_level' => '1',
		));
	}

}