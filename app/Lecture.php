<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lecture extends Model
{
    protected $fillable = ['name', 'gender', 'dob', 'phone', 'address', 'course_id'];

    public function courseLecture(){
    	return $this->hasOne('App\Course');
    }
}
