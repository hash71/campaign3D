<?php

class PercentageController extends \BaseController {

	public function getIndex(){

		$total_records = DB::table('message')
						->whereNull('error')
						->count();

		
		$males = DB::table('message')
				->whereNull('error')
				->where('gender','M')
				->count();

		$females = DB::table('message')
				->whereNull('error')
				->where('gender','F')
				->count();

 		
 		$education_name = ['Under SSC','SSC','HSC','Grad','Masters'];


 		$education = array();


 		for($i=1; $i<=5; $i++){

 			$education[ $education_name[$i-1] ] = DB::table('message')
 													->whereNull('error')
 													->where('education_id',$i)
 													->count();

 		}

 		
 		$occupation_name = ['Student','Housewife','Service Holder','Owner of a Business'];
 		
 		
 		$occupation = array();

 		
 		for($i=1; $i<=4; $i++){

 			$occupation[ $occupation_name[$i-1] ] = DB::table('message')
 													->whereNull('error')
 													->where('occupation_id',$i)
 													->count();

 		}

 		
 		$yes = DB::table('message')
 				->whereNull('error')
 				->where('sales','Y')
 				->count();

 		
 		$no = DB::table('message')
 				->whereNull('error')
 				->where('sales','N')
 				->count();

 		$currently_used_product_codes = ['UBL FW','Comp. FW','Soap User','Proxy User'];

 		for($i=1; $i<=4; $i++){
 			
 		$currently_used_products[$currently_used_product_codes[$i-1]] = DB::table('message')
	 			->whereNull('error')
	 			->where('currently_used_product_table_id',$i)
	 			->count();

 		}

 		$product_codes = ['FAL','PDF','PWB','PNS','PPC','DBM'];

 		foreach ($product_codes as $code) { 		
 			
	 		$products[$code] = DB::table('message')
								->whereNull('error')
								->sum($code);

 		}

 		

 		return View::make('percentage',	compact('total_records','males','females','education','occupation','currently_used_products','products','yes','no'));		


		

	}
}