<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model {
	protected $table = 'restaurants';

	public function category() {
		return $this->belongsTo('App\Category');
	}
	public function users() {
		return $this->belongsMany('App\User');
	}
}
