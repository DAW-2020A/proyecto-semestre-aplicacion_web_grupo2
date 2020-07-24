<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $fillable = ['title', 'description', 'score'];

    public function completes()
    {
        return $this->hasMany('App\Complete');
    }

    public function multiple_choices()
    {
        return $this->hasMany('App\MultipleChoice');
    }

    public function crosswords()
    {
        return $this->hasMany('App\Crossword');
    }
}


