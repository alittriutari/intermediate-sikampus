<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Student extends Authenticatable
{
	protected $fillable = ['nim', 'name','password','dob','gender', 'phone', 'address', 'class_id'];

	protected $hidden = ['password','remember_token'];
	
	public function classStudent(){
		return $this->belongsTo('App\Class', 'class_id');
	}
}
