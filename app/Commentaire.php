<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
    protected $fillable = ['publication_id','utilisateur_id','commentaire','estPositif'];
    protected $casts = ['estPositif' => 'boolean'];
}