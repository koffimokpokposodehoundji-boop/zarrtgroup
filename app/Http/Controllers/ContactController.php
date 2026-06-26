<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
   public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'telephone' => 'nullable|string',
        'entreprise' => 'nullable|string',
        'service' => 'required|string',
        'message' => 'required|string',
    ]);

    // Nettoyage simple
    $name = strip_tags(trim($request->name));
    $tel = strip_tags(trim($request->telephone ?? 'Non précisé'));
    $ent = strip_tags(trim($request->entreprise ?? 'Non précisée'));
    $service = strip_tags(trim($request->service));
    $msg = strip_tags(trim($request->message));

    $monNumero = "22893374475";

    // On construit le message avec des sauts de ligne URL directs (%0A)
    // pour éviter que PHP ne se mélange avec l'encodage système.
    $texte = "NOUVEAU CONTACT ZARRT *%0A%0A" .
             "Nom: " . $name . "%0A" .
             "Tel: " . $tel . "%0A" .
             "Entreprise: " . $ent . "%0A" .
             "Service: " . $service . "%0A%0A" .
             "Message: %0A" . $msg;

    // IMPORTANT : On n'utilise urlencode QUE sur les variables,
    // pas sur tout le texte car on a déjà mis les %0A.
    // Mais pour faire plus simple et plus sûr avec les émojis :
    $urlFinal = "https://wa.me/" . $monNumero . "?text=" . $texte;

    // Sauvegarde DB
    \App\Models\Contact::create($request->all());

    return redirect()->away($urlFinal);
}
}
