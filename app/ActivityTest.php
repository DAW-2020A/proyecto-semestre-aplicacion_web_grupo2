<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActivityTest extends Model
{
    public function activity()
    {
        return $this->belongsTo('App\Activity');
    }
    public function test()
    {
        return $this->belongsTo('App\Test');
    }
    public function students()
    {
        return $this->belongsToMany('App\User')->withTimestamps();
    }
}
