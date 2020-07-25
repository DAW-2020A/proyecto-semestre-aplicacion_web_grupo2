<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MultipleChoice extends Model
{
    protected $fillable = ['correct_answer','option1','option2','option3','option4'];

    public function activity()
    {
        return $this->belongsTo('App\Activity');
    }
}
