<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parie extends Model
{
    protected $fillable = ['cote', 'ArgentMiser','resultat'];
    protected $casts = ['resultat' => 'boolean'];
}