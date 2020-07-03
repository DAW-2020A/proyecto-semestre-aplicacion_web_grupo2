<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activitie extends Model
{
    protected $fillable = ['title', 'description', 'score'];
}
