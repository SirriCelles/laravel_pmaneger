<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
        'email', 
        'password',
        
        'city',
        'role_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    // how to specify a relationship in laravel.
    //for example a user has many task 

    public function task(){
        return $this->belongsToMany('App\Task');
    }

    // a user has many comments
    public function comments(){
        return $this->hasMany('App\Comment');
    }

    //a user has many companies
    public function company(){
        return $this->hasMany('App\Companies');
    }

    //a user belongs to one role
    public function role(){
        return $this->belongsTo('App\Role');
    }

    public function project(){
        return $this->belongsToMany('App\Project');
    }
}
