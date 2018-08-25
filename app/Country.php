<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable=array('name');

    public function companies()
    {
    	return $this->hasMany('App\Company');
    }
}
