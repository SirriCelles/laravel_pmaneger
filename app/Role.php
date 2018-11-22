<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
    protected $fillable = [

       'role_name',
    ];
    // a role has many users

    public function user(){
        return $this->hasMany('App\User');
    }
}
