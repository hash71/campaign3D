<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class BpTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		$first = DB::table('thana')->lists('district');
		
		$second = ['Metro','Outer'];

		foreach(range(1, 100) as $index)
		{	
				$f = $faker->randomElement($first);
				$s = $faker->randomElement($second);
				$l = ucfirst($faker->randomLetter);				

			DB::table('bp_info')->insert([				
				'region'=>$f." ".$s,
				'district'=>$f,
				'team'=>$l,
				'lsa_code'=>$f[0].$s[0].$l.sprintf('%04d',$index),
				'name'=>$faker->name,
				'mobile'=>'019'.$faker->randomNumber($nbDigits = 7)
			]);
		}
	}

}