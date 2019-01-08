<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materiel extends Model
{
    protected $fillable = ['materiel', 'utilisateur_id'];
}
