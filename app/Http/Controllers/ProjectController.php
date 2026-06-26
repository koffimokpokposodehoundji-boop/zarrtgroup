<?php

namespace App\Http\Controllers;

use App\Models\Projet; // Import du modèle
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        // On récupère tous les projets pour la vue projets.blade.php
        $projets = Projet::all(); 
        return view('projets', compact('projets'));
    }
}