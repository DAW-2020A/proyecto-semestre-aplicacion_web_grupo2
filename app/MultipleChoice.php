<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MultipleChoice extends Model
{
    protected $fillable = ['correct_answer','option1','option2','option3','option4'];

    public $timestamps=false;

    public function activity()
    {
        return $this->morphOne('App\Activity', 'type');
    }
}
