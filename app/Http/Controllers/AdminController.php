<?php

namespace App\Http\Controllers;

use App\Models\Projet; // Importation du modèle indispensable pour l'enregistrement
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Gère la soumission du formulaire et l'enregistrement du projet.
     */
    public function store(Request $request)
    {
        // 1. Validation stricte des données
        $request->validate([
            'titre'     => 'required|string|max:255',
            'categorie' => 'required|string',
            'image'     => 'required|image|mimes:jpeg,png,jpg|max:2048', // Validation du format et poids
        ]);

        // 2. Traitement de l'image
        // On génère un nom unique pour éviter d'écraser des fichiers existants
        $imageName = time() . '_' . $request->image->getClientOriginalName();
        
        // On déplace l'image dans le dossier public/images/projets
        $request->image->move(public_path('images/projets'), $imageName);

        // 3. Insertion en base de données via le modèle Projet
        // Note : Assure-toi que $fillable est bien configuré dans ton modèle Projet
        Projet::create([
            'titre'       => $request->titre,
            'categorie'   => $request->categorie,
            'description' => $request->description, // Champ facultatif selon tes besoins
            'image'       => $imageName,
        ]);

        // 4. Redirection avec feedback visuel
        return redirect()->back()->with('success', 'Projet ajouté avec succès !');
    }
}