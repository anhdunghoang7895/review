<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model {
	protected $table = 'users';
	public function comment() {
		return $this->hasMany('App\Comment');
	}
	public function restaurants() {
		return $this->belongsMany('App\Restaurant');
	}
	public function ratings() {
		return $this->hasOne('App\Rating');
	}
}
