<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WordSearch extends Model
{
    protected $fillable = ['clue', 'size'];

    public $timestamps=false;

    public function activity()
    {
        return $this->morphOne('App\Activity', 'type');
    }

    public function words()
    {
        return $this->hasMany('App\Word');
    }
}
