<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = ['word','definition'];

    public function crossword (){
        return $this->belongsTo('App\Crossword');
    }
}
