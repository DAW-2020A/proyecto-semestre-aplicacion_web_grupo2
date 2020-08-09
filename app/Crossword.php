<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crossword extends Model
{
    public $timestamps=false;

    public function activity()
    {
        return $this->morphOne('App\Activity', 'type');
    }

    public function questions(){
        return $this->hasMany('App\Question');
    }
}
