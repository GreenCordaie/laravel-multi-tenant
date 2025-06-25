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
    Schema::create('return_reasons', function (Blueprint $table) {
        $table->id();
        $table->string('reason'); // Ex: "Produit endommagé", "Mauvaise taille", etc.
// On crée simplement une colonne pour stocker l'ID du tenant (qui est un UUID/string)
// On ajoute un index pour de meilleures performances de recherche.
$table->string('tenant_id');
$table->index('tenant_id');        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('return_reasons');
    }
};
