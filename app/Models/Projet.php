<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    use HasFactory;

    /**
     * Les attributs qui peuvent être assignés en masse.
     * C'est ici que doit se trouver la variable $fillable.
     */
    protected $fillable = [
        'titre',
        'categorie',
        'description',
        'image',
    ];
}
