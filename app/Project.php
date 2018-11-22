<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
    protected $fillable = [

        'name',
        'description',
        'days',
        'company_id',
        'user_id',

    ];

    // aproject belongs to a user and a company
    public function user(){
        return $this->belongsToMany('App\User');
    }

    public function Company(){
        return $this->belongsTo('App\Companies');
    }

}
