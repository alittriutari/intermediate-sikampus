<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $fillable = ['day', 'time', 'course_id', 'class_id'];

    public function courseSchedule(){
    	return $this->belongsTo('App/Course', 'course_id');
    }

    public function classSchedule(){
    	return $this->belongsTo('App\Class', 'class_id');
    }
}
