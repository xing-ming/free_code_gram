<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	protected $table = 'posts';

	protected $fillable = [
		'caption',
		'image',
	];

	/**
	*@description: user relationship
	*/
  public function user()
  {
  	return $this->belongsTo('App\Models\User');
  }
}
