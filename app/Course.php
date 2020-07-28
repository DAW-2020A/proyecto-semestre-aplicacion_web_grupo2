<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Course extends Model
{
    protected $fillable = ['name'];

    public function teacher (){
        return $this->belongsTo('App\User');
    }
    public function student (){
        return $this->belongsToMany('App\User', 'course_student')->as('course_student')->withTimestamps();;
    }
    public static function boot(){
        parent::boot();

        static::creating(function ($course) {
            $course->user_id = Auth::id();
        });
    }
}
