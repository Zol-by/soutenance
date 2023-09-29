<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Filiere;

class FiliereController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('new_filiere');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create_filiere()
    {
        $filiere = Filiere::all();
        return view('new_filiere',compact('filiere'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store_filiere(Request $request)
    {
        $filiere = new Filiere();

        $filiere->nom_filiere = $request->nom_filiere;
        $filiere->code_filiere = $request->code_filiere;

        $filiere->save();
        return redirect()->route('create_filiere')->with('status', 'La filière a été bien enregistré avec succès');
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
    public function destroy(string $id)
    {
        //
    }
}
