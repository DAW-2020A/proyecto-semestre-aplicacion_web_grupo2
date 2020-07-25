<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WordSearch extends Model
{
    protected $fillable = ['clue', 'size'];

    public function words()
    {
        return $this->hasMany('App\Word');
    }
}
