<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Complete extends Model
{
    protected $fillable = ['complete_text','hidden_text'];

    public $timestamps=false;

    public function activity()
    {
        return $this->morphOne('App\Activity', 'type');
    }
}
