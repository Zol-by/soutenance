<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Inscription;
use App\Models\DemandeSoutenance;

class DemandeSoutenanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $etudiant = Inscription::all();
        return view('liste_dmd_soutenance');
    }

    public function index_2()
    {
        // $etudiant = Inscription::all();
        return view('listes_dmd_soutenance');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create_dmd_soutenance()
    {
        $etudiant = Inscription::all();
        return view('new_dmd_soutenance' ,compact('etudiant'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store_dmd_soutenance(Request $request)
    {
        DemandeSoutenance::create($request->all());

        return redirect()->route('create_dmd_soutenance')->with('status', 'La demande de soutenance a été bien envoyé avec succès');
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
