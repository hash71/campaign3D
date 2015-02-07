<?php

class TablesController extends \BaseController {

	public function getIndex(){
		
		$datas = DB::table('message')
				->orderBy('created_at','desc')
				->get();

		return View::make('table',compact('datas'));

	}

}