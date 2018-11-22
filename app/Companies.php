<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Companies extends Model
{

    //

    protected $fillable = [

    	'id',
        'name',
        'description',
        'user_id',

    ];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function project(){
    	return $this->hasMany('App\Project');
    }
}


