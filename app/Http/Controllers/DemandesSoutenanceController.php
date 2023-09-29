<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Inscription;
use App\Models\Demande;


class DemandesSoutenanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $demandes = Demande::where('statut_damd','En attente')->get();
        return view('liste_dmd_soutenance',compact('demandes'));
    }

    public function index_2()
    {
        $demandes = Demande::all();
        return view('listes_dmd_soutenance',compact('demandes'));
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
        Demande::create([

            'statut_damd' => $request->statut_damd,
            'nom_etudiant' => $request->nom_etudiant,
            'periode' => $request->periode,
            'photo_frais_soutenance' => $request->photo_frais_soutenance->store('photo', 'public'),
            'photo_buletin' => $request->photo_buletin->store('photo', 'public'),
            'heure_convenance' => $request->heure_convenance,
        ]);

        return redirect()->route('create_dmd_soutenance')->with('status', 'La demande de soutenance a été bien enregistré avec succès');

    }

    /**
     * Display the specified resource.
     */
    public function show_demande(string $id)
    {
        return view('detail_photo', [
            'demandes' => Demande::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    // formulaire validation statut demande accepté
    public function update_dmde(Request $request, $id)
    {
        $demandes = Demande::find($id);
        return view('confir_dmd',compact('demandes'));
    }
    // formulaire validation statut demande réjété
    public function update_dmd(Request $request, $id)
    {
        $demandes = Demande::find($id);
        return view('rejete_dmd',compact('demandes'));
    }

    public function update_dmde_tratement(Request $request, $id)
    {
        $demandes = Demande::find($id);
        $demandes->update([

            'statut_damd' => $request->statut_damd,
            'motif' => $request->motif,
        ]);

        return redirect()->route('liste_dmd_soutenance')->with('status', 'Le statut de la demande de soutenance a été bien enregistré avec succès');
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
