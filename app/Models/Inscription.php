<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use APP\Models\Filiere;
use APP\Models\Inscription;
use APP\Models\Enseignant;
use APP\Models\Demande;


class Inscription extends Model
{
    protected $guarded =[

    ];
    function Enseignant (){
        return $this->hasOne(Enseignant::class);
    }
    function Inscription (){
        return $this->hasOne(Inscription::class);
    }
    function Filiere (){
        return $this->hasOne(Filiere::class);
    }
    function Demande (){
        return $this->hasOne(Demande::class);
    }
}
