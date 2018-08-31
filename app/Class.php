<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Class extends Model
{
    protected $fillable = ['name', 'max_students'];

    public function students(){
    	return $this->hasMany('App\Student', 'class_id');
    }

    public function classAvailable(){
    	$max_students = $this->attributes['max_students'];
    	$student_on_class = $this->students()->count();
    	if ($student_on_class - $max_students) == 0 {
    		return false;
    	}else{
    		return true;
    	}
    }

    public function schedulesClass(){
    	return $this->hasMany('App/Schedule', 'class_id');
    }

    public function studentClass(){
    	return $this->hasMany('App/Student', 'class_id');
    }

}
