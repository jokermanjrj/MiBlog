<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	protected $table = "post";
	//Primary key
	public $primarykey = "id";
	//Timestamps
	public $timestamps = true;
}
