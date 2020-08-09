<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Activity extends Model
{
    protected $fillable = ['title', 'description', 'score'];

    public function activity_test()
    {
        return $this->hasMany('App\ActivityTest');
    }

    public function type()
    {
        return $this->morphTo();
    }
}


