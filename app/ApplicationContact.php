<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ApplicationContact extends Model
{
    protected $fillable = ['mail', 'facebook','snap'];
}