<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			User::create([
				'name' => $faker->name,
				'username' => $faker->word,
				'email' => $faker->email,
				'password' => Hash::make('secret')
			]);
		}
	}

}