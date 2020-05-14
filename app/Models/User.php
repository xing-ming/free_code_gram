<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Mail;

class User extends Authenticatable
{
  use Notifiable;

  protected $fillable = [
  	'name',
  	'email',
  	'password',
  ];

  protected $hidden = [
  	'password', 'remember_token',
  ];

  protected static function boot()
  {
    parent::boot();

    static::created(
      function ($user) {
        $user->profile()->create([
          'title' => $user->name,
        ]);

        Mail::to($user->email)->send(new NewUserWelcomeMail());
      }
    );
  }

  /**
	*@description: profile relation
  */
  public function profile()
  {
  	return $this->hasOne('App\Models\Profile');
  }

  /**
	*@description: posts relation
  */
  public function posts()
  {
  	return $this->hasMany('App\Models\Post')->orderBy('created_at', 'DESC');
  }
}
