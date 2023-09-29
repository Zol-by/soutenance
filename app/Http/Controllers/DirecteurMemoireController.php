<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Enseignant;
use App\Models\Inscription;
use App\Models\Dm_Ms;

class DirecteurMemoireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dm_ms = Dm_Ms::all();
        return view('liste_dm_ms',compact('dm_ms'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create_dm_ms()
    {
        $enseignant = Enseignant::all();
        $etudiant = Inscription::all();
        return view('new_dm_ms',compact('enseignant','etudiant'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store_dm_ms(Request $request)
    {

        Dm_Ms::create($request->all());

        return redirect()->route('create_dm_ms')->with('status', 'Le directeur de memoire et le maitre de stage a été bien enregistré avec succès');
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
