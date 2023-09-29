<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inscription;
use App\Models\Enseignant;
use App\Models\Demande;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $TotalEtudiant = Inscription::count();
        $TotalEnsiegnant = Enseignant::count();
        $TotalDiplome = Demande::count();

        return view('dashboard',compact('TotalEtudiant','TotalEnsiegnant','TotalDiplome'));
    }
}
