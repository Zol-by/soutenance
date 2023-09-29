<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Salle;

class SalleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('new_salle');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create_salle()
    {
        $salles = Salle::all();
        return view('new_salle',compact('salles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store_salle(Request $request)
    {
        $salles = new Salle();

        $salles->nom_salle = $request->nom_salle;
        $salles->nbr_place = $request->nbr_place;

        $salles->save();
        return redirect()->route('create_salle')->with('status', 'La salle a été bien enregistré avec succès');
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
