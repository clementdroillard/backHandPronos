<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UtilisateurParie extends Model
{
    protected $fillable = ['utilisateur_id', 'parie_id'];
}