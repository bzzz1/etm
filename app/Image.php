<?php namespace App;

use App\BaseModel;

class Image extends BaseModel {
	public 	  $timestamps = false;
	protected $guarded = [];
	protected $primaryKey = 'image_id';
	protected $trimmed = [];
}
