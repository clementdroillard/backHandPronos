<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = ['publication_id', 'rang','parie_id','url','description'];
}