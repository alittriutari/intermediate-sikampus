<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Class extends Model
{
    protected $fillable = ['name', 'max_students'];

    public function schedulesClass(){
    	return $this->hasMany('App/Schedule', 'class_id');
    }

    public function studentClass(){
    	return $this->hasMany('App/Student', 'class_id');
    }

}
