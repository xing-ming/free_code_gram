<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
	protected $table = 'profiles';

	protected $fillable = [
		'title',
		'description',
		'url',
		'image',
	];

	public function profileImage()
	{
		return '/storage/'.$this->image ? "{{ url('img/logo/LOGO.png') }}" : ($this->image);
	}

	/**
	*@description: user relationship
	*/
  public function user()
  {
  	return $this->belongs('App\Models\User');
  }
}
