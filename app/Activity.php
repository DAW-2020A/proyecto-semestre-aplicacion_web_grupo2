<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $fillable = ['title', 'description', 'score'];

    public function complete()
    {
        return $this->hasOne('App\Complete');
    }

    public function multiple_choice()
    {
        return $this->hasOne('App\MultipleChoice');
    }

    public function crossword()
    {
        return $this->hasOne('App\Crossword');
    }
}


