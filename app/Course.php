<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = ['name', 'lecture_id'];

    public function lectureCourse(){
    	return $this->hasOne('App\Lecture');
    }

    public function scheduleCourses(){
    	return $this->hasMany('App\Schedule', 'course_id');
    }
}
