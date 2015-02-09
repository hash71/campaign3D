<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class MessagesTableSeeder extends Seeder {

	public function run()
	{
		
		$faker = Faker::create();
		
		

		
		foreach(range(1, 100) as $index)
		{
			$sold = [
				'1'=>$faker->randomDigit,
				'2'=>$faker->randomDigit,
				'3'=>$faker->randomDigit,
				'4'=>$faker->randomDigit,
				'5'=>$faker->randomDigit,
				'6'=>$faker->randomDigit,
			];		
			
			$cnumber = '017'.$faker->randomNumber($nbDigits = 8);
			$len = strlen($cnumber);

			$errors = null;

			if($len != 11){

				$errors['mobile_invalid'] = "Customer mobile field invalid";
				$errors = json_encode($errors);
			}


			Message::create([
				'campaign_id'=>'u1',
				'customer_name'=>$faker->name,
				'age'=>$faker->numberBetween($min = 15, $max = 70),
				'gender'=>$faker->randomElement(['M','F']),
				'customer_mobile'=>$cnumber,
				'thana_code'=>$faker->randomElement(DB::table('thana')->lists('thana_code')),
				'education_id'=>$faker->randomElement([1,2,3,4,5]),
				'occupation_id'=>$faker->numberBetween($min = 1, $max = 4),
				'coupon_code'=>$faker->randomElement(DB::table('coupon')->lists('coupon_code')),
				'currently_used_product_table_id'=>$faker->randomElement([1,2,3,4,5]),
				'sales'=>$faker->randomElement(['Y','N']),
				'products_sold'=>json_encode($sold),

				'bp_mobile'=>$faker->randomElement(DB::table('bp_info')->lists('mobile')),
				'created_at'=>$faker->dateTimeBetween($startDate = '-1 years', $endDate = 'now'),
				
				'FAL'=>$sold['1'],  
				'PDF'=>$sold['2'],
				'PWB'=>$sold['3'],
				'PNS'=>$sold['4'],
				'PPC'=>$sold['5'],
				'DBM'=>$sold['6'],


				'error'=>$errors

													
						

				// 'error'=> json_encode(['error'=>'This has an error'])
			]);
		}
	}

}