<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Test extends Model
{
    protected $fillable = ['name', 'description','start_time','end_time'];

    public function activity_test()
    {
        return $this->hasMany('App\ActivityTest');
    }
    /*public static function boot(){
        parent::boot();

        static::creating(function ($test) {
            $test->user_id = Auth::id();
        });
    }*/
}
