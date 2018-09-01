<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable= array('country_id', 'title', 'description');

    public function country(){
    	return $this->belongsTo('App\Country');
    }

    public function users()
    {
    	return $this->belongsToMany('App\User', 'company_user');
    }


}
