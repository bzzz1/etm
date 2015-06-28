<?php namespace App;

use App\BaseModel;

class Filter extends BaseModel {
	public 	  $timestamps = false;
	protected $guarded = [];
	protected $primaryKey = 'filter_id';
	protected $trimmed = ['title', 'field'];
}
