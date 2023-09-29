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
        Schema::create('dm__ms', function (Blueprint $table) {

            $table->id();
            $table->string('nom_ms');
            $table->string('email_ms');
            $table->string('telephone_ms');
            $table->string('sexe_ms');
            $table->string('fonction_ms');
            $table->string('theme');

            $table->unsignedBigInteger('id_enseignant')->unsigned();
            $table->foreign('id_enseignant')->references('id')->on('enseignants')->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('id_etudiant')->unsigned();
            $table->foreign('id_etudiant')->references('id')->on('inscriptions')->onDelete('cascade')->onUpdate('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dm__ms');
    }
};
