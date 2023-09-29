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
        Schema::create('jury_soutenance', function (Blueprint $table) {

            $table->id();

            $table->string('president_jury');
            $table->string('grade_pr_jury');
            $table->string('nom_dm');
            $table->string('nom_ms');
            $table->string('nom_etudiant');
            $table->string('nom_salle');
            $table->string('date_soutenance');
            $table->string('heure_soutenance');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jury_soutenance');
    }
};
