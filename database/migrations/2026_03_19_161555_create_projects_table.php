<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // On utilise 'projets' avec un 's' pour correspondre à ton modèle et tes erreurs SQL
        Schema::create('projets', function (Blueprint $table) {
            $table->id();
            $table->string('titre'); // La colonne que MySQL ne trouvait pas
            $table->string('categorie'); 
            $table->text('description')->nullable(); // Ajout de nullable pour plus de souplesse
            $table->string('image')->nullable(); 
            $table->timestamps();
        });                   
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // CORRECTION : Le nom doit être identique à celui du haut ('projets')
        Schema::dropIfExists('projets');
    }
};