<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company_User extends Model
{
    protected $fillable= array('country_id', 'user_id');

}
