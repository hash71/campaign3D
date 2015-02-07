<?php




use Faker\Factory as Faker;


Route::get('dummy_user',function(){

	User::create([
			'email'=>'analyzen@gmail.com',
			'password'=>Hash::make('analyzen')
	]);

});

Route::get('newapi/{token}/{bp_mobile}/{message}','MessagesController@newcreate');

Route::group(['before'=>'auth'], function(){

	Route::controller('messages','MessagesController');

	Route::controller('table','TablesController');

	Route::controller('percentage','PercentageController');

});

Route::controller('users', 'UsersController');

Route::get('/', function(){	
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





