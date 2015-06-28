<?php namespace App;

use App\BaseModel;

class Feedback extends BaseModel {
	public 	  $timestamps = false;
	protected $guarded = [];
	protected $primaryKey = 'feedback_id';
	protected $dates = ['added_on'];
	protected $trimmed = [];
}
