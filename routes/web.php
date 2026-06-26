<?php

use Illuminate\Support\Facades\Route;

// IMPORTATIONS DES CONTRÔLEURS
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProjectController;

/*
|--------------------------------------------------------------------------
| Web Routes - TechnoSolutions
|--------------------------------------------------------------------------
*/

// 1. Accueil
Route::get('/', function () {
    return view('well');
})->name('home');

// 2. À Propos
Route::get('/a-propos', function () {
    return view('about');
})->name('about');

// 3. Services
Route::get('/services', function () {
    return view('service');
})->name('services');

// 4. Contact
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact', [ContactController::class, 'store'])->name('contact.submit');

// 5. Projets (Page Publique Dynamique)
// Cette route utilise ProjectController pour afficher les données de la base
Route::get('/projets', [ProjectController::class, 'index'])->name('projects.index');

// 6. Administration des Projets (Le Studio Néon)
// Affichage du formulaire d'ajout
Route::get('/adminp', function () {
    return view('adminprojet');
})->name('admin.projet');

// Traitement de l'enregistrement du projet
Route::post('/adminp', [AdminController::class, 'store'])->name('adminp.store');