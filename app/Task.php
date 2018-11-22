<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //
    protected $fillable = [

       'name',
       'description',
       'project_id',
       'user_id',
       'company_id',
       'days',
       'hours', 

    ];

    /* a task belongs to a user
    a project and a company. this is easy to etablish from the user id
    */

    public function user(){
        return $this->belongsToMany('App\User');
    }

    public function project(){
        return $this->belongsTo('App\Project');
    }

    public function company(){
        return $this->belongsTo('App\Companies');
    }
}
