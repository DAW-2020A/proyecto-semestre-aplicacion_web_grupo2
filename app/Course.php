<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Course extends Model
{
    protected $fillable = ['name','code'];

    public static function boot(){
        parent::boot();

        static::creating(function ($course) {
            $course->user_id = Auth::id();
        });
    }

    public function teacher(){
        return $this->belongsTo('App\User');
    }

    public function students(){
        return $this->belongsToMany('App\User', 'course_student')->as('course_student')->withTimestamps();;
    }

    public function tests(){
        return $this->hasMany('App\Test');
    }
}
