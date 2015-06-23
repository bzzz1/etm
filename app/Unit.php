<?php namespace App;

use App\BaseModel;

class Unit extends BaseModel {
	public 	  $timestamps = false;
	protected $guarded = [];
	protected $primaryKey = 'article_id';
	protected $trimmed = [];
}
