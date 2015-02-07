<?php

class UsersController extends \BaseController {

	public function __construct(){

		$this->beforeFilter('csrf',['on'=>'post']);

	}

	public function getLogin(){

		if(Auth::check()){

			return Redirect::to('messages/index');
		}
		return View::make('login');
	}

	public function postLoginCheck(){
		
		// return "hello"	;
		if(Auth::attempt(['email'=>Input::get('email'),'password'=>Input::get('password')],true)){
			
			return Redirect::to('messages/index');
			
		}else{

			return Redirect::to('users/login');
		}

	}

}