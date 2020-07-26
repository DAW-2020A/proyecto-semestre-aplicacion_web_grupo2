<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crossword extends Model
{

    public function activity()
    {
        return $this->belongsTo('App\Activity');
    }
    public function questions(){
        return $this->hasMany('App\Question');
    }
}
