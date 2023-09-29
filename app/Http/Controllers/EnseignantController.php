<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Enseignant;
use App\Models\Filiere;

class EnseignantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $enseignant = Enseignant::all();
        return view('liste_enseignant',compact('enseignant'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create_enseignant()
    {
        $filiere = Filiere::all();
        return view('new_enseignant',compact('filiere'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $enseignant = new Enseignant();

        $enseignant->nom = $request->nom;
        $enseignant->prenom = $request->prenom;
        $enseignant->email = $request->email;
        $enseignant->telephone = $request->telephone;
        $enseignant->sexe = $request->sexe;
        $enseignant->grade = $request->grade;

        $enseignant->save();
        return redirect()->route('create_enseignant')->with('status', 'L\'enseignant a été bien enregistré avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete_enseignant($id)
    {
        $enseignant = Enseignant::find($id);
        $enseignant->delete();

        return redirect()->route('liste_enseignant')->with('status', 'L\'enseignant a été bien supprimé avec succès');
    }
}
