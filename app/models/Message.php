<?php

class Message extends \Eloquent {

	protected $table = 'message';

	protected $guarded = ['id'];

	// protected $fillable = [];

	public static $rules = array(

		'campaign_id'=>'required',
		'access_token'=>'required',
		'customer_name'=>'required',
		'age'=>'required',
		'gender'=>'required',
		'customer_mobile'=>'required',
		'thana_code'=>'required',
		'education_id'=>'required',
		'occupation_id'=>'required',
		'coupon_code'=>'required',
		'currently_used_product_table_id'=>'required',
		'sales'=>'required',
		'products_sold'=>'required',
		'bp_mobile'=>'required'
	);


}