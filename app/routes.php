<?php



Route::get('newapi/{token}/{bp_mobile}/{message}','MessagesController@newcreate');


Route::get('timeline',function(){	


	if(Request::ajax()){			

		$start = date("Y-m-d");

		$end = date('Y-m-d',strtotime('+1 day',strtotime($start)));

		$total = DB::table('message')
				->where('created_at','>=',$start)
				->where('created_at','<',$end)								
				->count();		

		$new_msg =$total - DB::table('session')->where('id',1)->pluck('value');
		
		if($new_msg == 0){
			$messages = null;
			return $messages;
		}

		// return View::make('timelineajax',compact('messages'));	

		$messages = DB::table('message')
				->orderBy('created_at','desc')	
				->take($new_msg)				
				->get();		

		$id = DB::table('session')->where('id',1)->update(['value'=>$total]);
		
		// return dd($messages);		

		return View::make('timelineajax',compact('messages'));	
	
	}
	
	$start = date("Y-m-d");

	$end = date('Y-m-d',strtotime('+1 day',strtotime($start)));

	// return $start;

	$messages = DB::table('message')
				->where('created_at','>=',$start)
				->where('created_at','<',$end)
				->orderBy('created_at','desc')	
				// ->lists('id');							
				->get();	
	// return $messages;
	DB::table('session')->where('id',1)->update(['value'=>sizeof($messages)]);	

	// return dd($messages);
	
	return View::make('timeline',compact('messages'));
	
})->before('auth');



Route::group(['before'=>'auth'], function(){

	Route::controller('messages','MessagesController');

	Route::controller('table','TablesController');

	Route::controller('percentage','PercentageController');

});

Route::controller('users', 'UsersController');

Route::get('bplist', function(){

	return View::make('bplist');

})->before('auth');

Route::get('/profile/{id}', function($id){
	
	
	$bp = DB::table('bp_info')->find($id);

	$messages = DB::table('message')
				->where('bp_mobile',$bp->mobile)
				->orderBy('created_at','desc')
				->get();

	

	return View::make('profile',compact('bp','messages'));

})->before('auth');

Route::get('/', function(){	
	
		return Redirect::to('users/login');
});

Route::get('logout', function(){

	return "hello";
	Auth::logout();
	
});


// Route::get('dummy_user',function(){

// 	User::create([
// 			'email'=>'analyzen@gmail.com',
// 			'password'=>Hash::make('analyzen')
// 	]);

// });

// Route::get('token',function(){
// 	$key = 'analyzen';
// 	$string = 'access_token';

// 	$encrypted = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($key), $string, MCRYPT_MODE_CBC, md5(md5($key))));
// 	$decrypted = rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, md5($key), base64_decode($encrypted), MCRYPT_MODE_CBC, md5(md5($key))), "\0");

// 	return $decrypted." = ".$encrypted." size = ".strlen($encrypted);
// 	var_dump($encrypted);
// 	var_dump($decrypted);
// });





