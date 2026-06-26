<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    // Liste des champs autorisés à être remplis via le formulaire
    protected $fillable = [
        'name',
        'email',
        'phone',
        'company',
        'service',
        'message',
    ];
}
