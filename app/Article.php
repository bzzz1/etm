<?php namespace App;

use App\BaseModel;
use Carbon\Carbon;

class Article extends BaseModel {
	public 	  $timestamps = false;
	protected $guarded = [];
	protected $primaryKey = 'article_id';
	protected $trimmed = ['title'];

	// public function setTimeAttribute($date) {
	// 	$this->attributes['added_on'] = Carbon::parse($date);
	// }

	// public function getTimeAttribute($date) {
	// 	return new Carbon($date);
	// } 
}