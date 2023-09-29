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
        Schema::create('demandes', function (Blueprint $table) {

            $table->id();
            $table->string('nom_etudiant');
            $table->string('statut_damd');
            $table->string('motif');
            $table->string('periode');
            $table->string('photo_frais_soutenance');
            $table->string('photo_buletin');
            $table->string('heure_convenance');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('demandes');
    }
};
