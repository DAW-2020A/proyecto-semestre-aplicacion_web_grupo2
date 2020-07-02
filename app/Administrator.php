<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Administrator extends Model
{
    protected $fillable = ['firstname', 'lastname', 'e-mail', 'password'];
}
