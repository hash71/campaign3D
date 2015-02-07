<?php

class MessagesController extends \BaseController {	


	public function newcreate($token,$bp_mobile,$message){

		/*valid pattern*/

		/*
		http://localhost/campaign/public/newapi/token/01910340450/u1 nazmul,25,m,01710340450,1001,5,1,81896021,2,y,1:2

		Length = 12(lowest possible valid message length)
		*/

		$full_msg = $message;// $full_msg is a string 

		$pos = strpos($message, ' ');
		
		$message[$pos] = ',';//replacing the space after u1 with ,
		
		
		$flag = 1;	

		$errors = array();

		$items_sold = array();

		$message = explode(",",$message);//$message is an array of tokens


		if(sizeof($message) < 12){// , seperated field number

			$errors['number_of_fields'] = "Insufficient number of fields";

			$msg = new Message;

			$msg->error = json_encode($errors);

			$msg->save();


		}else if(strlen($full_msg)>255){//if message length exceeding 

			$errors['message_length'] = "Message Length Exceeded";

			$msg = new Message;

			$msg->error = json_encode($errors);

			$msg->save();

		}else{

			for ($i=0; $i < 11; $i++) { 

				$message[$i] = trim($message[$i]);

				if( strpos($message[$i], ':')  ){//if someone skips any field but adds extra in 1:2,3:4 then length will satisfy which is wrong

					$flag = 0;

					$errors['numberOfFields'] = "Insufficient number of fields";

					$msg = new Message;

					$msg->error = json_encode($errors);

					$msg->save();

					break;

				}
			}

			if($flag == 1){

				try{

					for ($i=11; $i<sizeof($message) ; $i++) { 
						
						if(strlen($message[$i])){

							$tmp = explode(':',$message[$i]);

							if( !ctype_digit($tmp[0]) || !ctype_digit($tmp[1]) ){//1:2,3:4 both of 1:2 must be integers
								
								$items_sold = -1;//lookup
								
								break;
							}

							$items_sold[$tmp[0]] = $tmp[1];//ex. $items_sold['1'] = 2
						}
						
						
					}

				}catch(Exception $e){//exception might occur for 1:,:2 these formats

					$items_sold = null;//look;

				}
				
				//if the message have valid number of fields we save the message even
				// if the field is blank like 1,'',3

				$msg = new Message;

				$msg->campaign_id = $message[0];			
				$msg->customer_name = $message[1];
				$msg->age = $message[2];
				$msg->gender = ucfirst($message[3]);
				$msg->customer_mobile = $message[4];
				$msg->thana_code = $message[5];
				$msg->education_id = $message[6];
				$msg->occupation_id = $message[7];
				$msg->coupon_code = $message[8];
				$msg->currently_used_product_table_id = $message[9];
				$msg->sales =ucfirst( $message[10]);


				$msg->products_sold = json_encode($items_sold);

				if(json_decode($msg->products_sold) && $items_sold!=-1){//returns null if json is null

					foreach ($items_sold as $key => $value) {
						
						if($key==1){
							$msg->FAL = $value;							
						}
						if($key==2){
							$msg->PDF = $value;							
						}
						if($key==3){
							$msg->PWB = $value;							
						}
						if($key==4){
							$msg->PNS = $value;							
						}
						if($key==5){
							$msg->PPC = $value;							
						}
						if($key==6){
							$msg->DBM = $value;							
						}

					}										

				}

				$msg->bp_mobile = $bp_mobile;
				$msg->full_message = $full_msg;



				if($msg->campaign_id != 'u1'){

					$errors['campaign_id'] = 'Wrong Campaign Id';

				}

				if( !strlen($msg->customer_name) ){

					$errors['name_blank'] = "Customer name field blank";	

				}else{

					if( strlen($msg->customer_name) > 15 ){

						$errors['name_size'] = "Customer name more than 15 characters";

					}
				}


				if(!strlen($msg->age)){

					$errors['age_blank'] = "Customer age field blank";

				}else{

					if( !ctype_digit($msg->age) ){

						$errors['age_numeric'] = "Customer age not numeric";

					}

					if( $msg->age < 10 || $msg->age > 100  ){

						$errors['age_limit'] = "Customer age not in limit";

					}
				}


				if(!strlen($msg->gender)){

					$errors['gender_blank'] = "Customer gender field is blank";

				}else{

					if($msg->gender !== 'm' && $msg->gender !=='f' && $msg->gender !== 'M' && $msg->gender !== 'F'){

						$errors['gender_type'] = "Customer gender type undefined";
					}
				}



				if( !strlen($msg->customer_mobile) ){

					$errors['mobile_blank'] = "Customer mobile field blank";

				}else{

					if( strlen($msg->customer_mobile) != 11 ){

						$errors['mobile_blank'] = "Customer mobile field not 11 digit";
					}
				}


				if( strlen($msg->thana_code)!=4 ){

					$errors['thana_code_format'] = "Thana code invalid format";

				}else{

					if( !in_array($msg->thana_code, DB::table('thana')->lists('thana_code'))){

						$errors['thana_code_not_found'] = "Thana code not in database";

					}
				}



				if(!strlen($msg->education_id)){

					$errors['education_blank'] = "Education field blank";

				}else{

					if($msg->education_id < 1 || $msg->education_id > 5){

						$errors['education_range'] = "Education value not in range";
					}
				}



				if(!strlen($msg->occupation_id)){

					$errors['occupation_blank'] = "Occupation field blank";

				}else{

					if($msg->occupation_id < 1 || $msg->occupation_id > 4 ){

						$errors['occupation_range'] = "Occupation value not in range";

					}
				}



				if(!strlen($msg->coupon_code)){

					$errors['coupon_code_blank'] = "Coupon Code Blank";			

				}else{

					if( !in_array($msg->coupon_code, DB::table('coupon')->lists('coupon_code')) ){

						$errors['coupon_code_invalid'] = "Coupon Code not listed in Database";			

					}
				}

				if(!strlen($msg->currently_used_product_table_id)){

					$error['currently_using'] = "Currently Using Products Field blank";

				}else{

					if($msg->currently_used_product_table_id < 0 || $msg->currently_used_product_table_id > 4){

						$error['currently_using_invalid'] = "Currently Using Product Not Listed";		
					}
				}

				if(!strlen($msg->sales)){

					$errors['sales_blank'] = "Sales Field Blank";

				}else{

					if($msg->sales !='y' && $msg->sales !='n' && $msg->sales !='Y' && $msg->sales !='N'){

						$errors['sales_invalid'] = "Sales format invalid";
					}
				}

				if($items_sold == -1){//lookup

					$errors['items_sold_invalid'] = "Items sold field invalid format";

				}else if( !sizeof($items_sold) ){//size will be 0 if $items_sold = null

					$errors['items_sold_blank'] = "Items sold field blank";

				}else{

					if(!json_decode($msg->products_sold)){//if $msg->products_sold = null

						$errors['items_sold_invalid'] = "Items sold field invalid format";
					}

				}
			}

		}	

		$msg->error = json_encode($errors);

		// $msg->save();

		return dd($msg);


	}

	public function getIndex(){	

		// return "hello";

		if (Request::ajax()){


		    
		    $str = Input::get('range');
		
			$start = "";
			$end = "";

			for($i=0; $i<10; $i++)		$start.= $str[$i];		

			for($i=13; $i<23; $i++)		$end.= $str[$i];
		
			// $start = date('Y-m-d',strtotime('-1 day',strtotime($start)));
			$end   = date('Y-m-d',strtotime('+1 day',strtotime($end)));
			
			

			$product_codes = ['FAL','PDF','PWB','PNS','PPC','DBM'];

			$single_data = array();

			$data = array();

			foreach ($product_codes as $code) {

				$result = DB::table('message')
						->where('created_at','>=',$start)
						->where('created_at','<',$end)
						->sum($code);	

				$single_data['y'] = $code;
				$single_data['qtt'] = $result;

				array_push($data, ($single_data));
			}
			return Response::json($data);
		}

			$start =  '2014-01-01';
			// $start =  date('Y-m-t');
			$end = date('Y-m-01');
		
			// $start = date('Y-m-d',strtotime('-1 day',strtotime($start)));
			$end   = date('Y-m-d',strtotime('+1 day',strtotime($end)));
			
			
			$product_codes = ['FAL','PDF','PWB','PNS','PPC','DBM'];
			$single_data = array();

			$data = array();

			foreach ($product_codes as $code) {

				$result = DB::table('message')
						->where('created_at','>=',$start)
						->where('created_at','<',$end)
						->sum($code);	

				$single_data['y'] = $code;
				$single_data['qtt'] = $result;

				array_push($data, ($single_data));


			}
			$datas= json_encode($data);
			// return $datas;
			return View::make('index',compact('datas'));



		

		
					
					
		

	}



}