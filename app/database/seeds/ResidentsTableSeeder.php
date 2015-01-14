<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ResidentsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(2700, 3000) as $index)
		{
			Resident::create([
				'resident_id' => $index,
				'first_name'  => $faker->firstName,
				'middle_name' => $faker->firstName,
				'last_name'   => $faker->lastName,
				'sex'         => $faker->randomElement($array = ['male','female']),
				'dob'         => $faker->dateTimeBetween($startDate = '-18 years', $endDate = '-12 years'),
				'status'      => $faker->randomElement($array = ['Active', 'Inactive', 'Successful Release', 
												 'General Release', 'Failure of Placement', 'Medical Failure of Placement']),
				'stage'       => $faker->randomElement($array = ['Orientation', 'Adjustment', 'Transition', 'Honors']),
				'stage_state' => $faker->randomElement($array = [null, 'Loss of Privileges', 'Run Risk', 'ISP', 'Furlough']),
				]);
		}
	}

}