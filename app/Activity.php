<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

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
    public function word_search()
    {
        return $this->hasOne('App\WordSearch');
    }
    public function crossword()
    {
        return $this->hasOne('App\Crossword');
    }
    public function administrator (){
        return $this->belongsTo('App\User');
    }
    public static function boot(){
        parent::boot();

        static::creating(function ($activity) {
            $activity->user_id = Auth::id();
        });
    }
    public function activity_test()
    {
        return $this->hasMany('App\ActivityTest');
    }
}


