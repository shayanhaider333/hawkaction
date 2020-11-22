<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class store extends Model
{
    //
	protected $fillable =['id','store_name','address','city_id','state_id','country_id'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function city()
    {
    	return $this->belongsTo('App\city');
    }
    public function state()
    {
    	return $this->belongsTo('App\state');
    }
    public function country()
    {
    	return $this->belongsTo('App\country');
    }
}
