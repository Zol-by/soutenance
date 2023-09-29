<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Enseignant;
use App\Models\Inscription;
use App\Models\Dm_Ms;
use App\Models\Salle;
use App\Models\JurySoutenances;

class JurySoutenanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jurys = JurySoutenances::all();
        return view('liste_jurys', compact('jurys'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create_jury_soutenance()
    {
        $enseignant = Enseignant::all();
        $etudiant = Inscription::all();
        $dm_ms = Dm_Ms::all();
        $salle = Salle::all();
        return view('new_jury',compact('enseignant','etudiant','dm_ms','salle'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store_jury_soutenance(Request $request)
    {
        JurySoutenances::create($request->all());

        return redirect()->route('create_jury_soutenance')->with('status', 'Le jury a été bien enregistré avec succès !');
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
    public function delete_jury($id)
    {
        $jury = JurySoutenances::find($id);
        $jury->delete();
        return redirect()->route('liste_jurys')->with('status', 'Le jury a été bien supprimé avec succès !');
    }
}
