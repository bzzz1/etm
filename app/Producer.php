<?php namespace App;

use App\BaseModel;

class Producer extends BaseModel {
	public 	  $timestamps = false;
	protected $guarded = [];
	protected $primaryKey = 'article_id';
	protected $trimmed = ['title'];
}
