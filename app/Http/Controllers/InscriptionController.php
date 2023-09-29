<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Inscription;
use App\Models\Filiere;
use App\Models\Enseignant;
use App\Models\Demande;


class InscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $etudiant = Inscription::all();
        $TotalEtudiant = Inscription::count();
        $TotalEnsiegnant = Enseignant::count();
        $TotalDiplome = Demande::count();
        
        return view('liste_etudiant',compact('etudiant','TotalEtudiant','TotalEnsiegnant','TotalDiplome'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create_etudiant()
    {
        $filiere = Filiere::all();
        return view('new_etudiant',compact('filiere'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store_etudiant(Request $request)
    {
        $etudiant = new Inscription();

        $etudiant->nom = $request->nom;
        $etudiant->prenom = $request->prenom;
        $etudiant->photo_etudiant = $request->photo_etudiant->store('photo', 'public');
        $etudiant->email = $request->email;
        $etudiant->date_naissance = $request->date_naissance;
        $etudiant->sexe = $request->sexe;
        $etudiant->parents = $request->parents;
        $etudiant->filiere = $request->filiere;
        $etudiant->niveau = $request->niveau;

        $etudiant->save();

        return redirect()->route('create_etudiant')->with('status', 'L\'étudiant a été bien enregistré avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show_etudiant($id)
    {

        return view('detail_etudiant', [
            'etudiant' => Inscription::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit_etudiant($id)
    {
        return view('edit_etudiant');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update_etudiant(Request $request, string $id)
    {
        $etudiant = Inscription::find($id);
        return view('edit_etudiant',compact('etudiant'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete_etudiant($id)
    {
        $etudiant = Inscription::find($id);
        $etudiant->delete();

        return redirect()->route('liste_etudiant')->with('status', 'L\'étudiant a été bien supprimé avec succès !');
    }
}
