<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Staff extends Authenticatable
{
    protected $fillable = ['name','password','dob','gender', 'phone'];

    protected $hidden = ['password','remember_token'];
}
