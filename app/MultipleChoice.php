<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MultipleChoice extends Model
{
    protected $fillable = ['CorrectAnswer','Option1','Option2','Option3','Option4'];
}
