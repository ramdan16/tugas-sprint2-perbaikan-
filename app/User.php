<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
class User extends Authenticatable
{
    use Notifiable;


    protected $fillable =[
    	'name','email','password',
    ];
    protected $hidden =[
    	'password','remember_token',
    ];

}
