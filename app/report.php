<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class report extends Model
{
    //

    protected $fillable =['id','user_id','camera_id','priority_id','admin_id','store_id','incident','status','date','time','document','description','link'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function incident()
    {
        return $this->belongsTo('App\incident');
    }

    public function camera()
    {
    	return $this->belongsTo('App\camera');
    }

    public function store()
    {
    	return $this->belongsTo('App\store');
    }

    public function priority()
    {
    	return $this->belongsTo('App\priority');
    }
    public function admin()
    {
    	return $this->belongsTo('App\Admin');
    }

    public function comment()
    {
        return $this->belongsTo('App\comment');
    }

	
}
