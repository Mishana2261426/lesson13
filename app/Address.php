<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = [
    	'city_name',
    	'street',
    	'house',
    	'floor'
    ];
}
