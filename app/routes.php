<?php




// Route::get('dummy_user',function(){

// 	User::create([
// 			'email'=>'analyzen@gmail.com',
// 			'password'=>Hash::make('analyzen')
// 	]);

// });

Route::get('mobile',function(){
	 return preg_match("/^01[0-9]{9}$/", '01710340450');
});

Route::get('timeline',function(){

	if(Request::ajax()){
	
		$messages = DB::select('SELECT * FROM message WHERE created_at BETWEEN timestamp(DATE_SUB(NOW(), INTERVAL 30 SECOND)) AND timestamp(NOW())');

		return View::make('timelineajax',compact('messages'));
	
	}


	$start = date("Y-m-d");

	$end = date('Y-m-d',strtotime('+1 day',strtotime($start)));

	$messages = DB::table('message')
				->where('created_at','>=',$start)
				->where('created_at','<',$end)
				->orderBy('created_at','desc')
				->get();
	// return dd($messages);

	return View::make('timeline',compact('messages'));
	
});

Route::get('uri', function(){

	// $result = DB::select(query, bindings)
	$messages = DB::select('SELECT * FROM message WHERE created_at BETWEEN timestamp(DATE_SUB(NOW(), INTERVAL 30 SECOND)) AND timestamp(NOW())');
	return dd($result);
	$start = date("h-i-s");

	$end = date('h-i-s',strtotime('-30 second',strtotime($start)));

	$messages = DB::table('message')
				->where('created_at','>=',$end)
				->where('created_at','<',$start)
				->orderBy('created_at','desc')
				->get();
	return dd($messages);
});

Route::get('newapi/{token}/{bp_mobile}/{message}','MessagesController@newcreate');

Route::group(['before'=>'auth'], function(){

	Route::controller('messages','MessagesController');

	Route::controller('table','TablesController');

	Route::controller('percentage','PercentageController');

});

Route::controller('users', 'UsersController');

Route::get('bplist', function(){

	return View::make('bplist');
});

Route::get('/profile/{id}', function($id){
	
	// $t = DB::table('message')->where();

	// return dd(json_decode($t->error));
	// 0192614659
	// $bp = DB::table('bp_info')->where('mobile','0192614659')->pluck('id');
	// return $bp;
	$bp = DB::table('bp_info')->find($id);

	$messages = DB::table('message')
				->where('bp_mobile',$bp->mobile)
				->orderBy('created_at','desc')
				->get();

	// return dd($messages);

	return View::make('profile',compact('bp','messages'));

});

Route::get('/', function(){	
	// return "helo";
		return Redirect::to('users/login');
});

Route::get('token',function(){
	$key = 'analyzen';
	$string = 'access_token';

	$encrypted = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($key), $string, MCRYPT_MODE_CBC, md5(md5($key))));
	$decrypted = rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, md5($key), base64_decode($encrypted), MCRYPT_MODE_CBC, md5(md5($key))), "\0");

	return $decrypted." = ".$encrypted." size = ".strlen($encrypted);
	var_dump($encrypted);
	var_dump($decrypted);
});





