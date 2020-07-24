<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Word extends Model
{
    protected $fillable = ['word'];

    public function word_search()
    {
        return $this->belongsTo('App\WordSearch');
    }
}
