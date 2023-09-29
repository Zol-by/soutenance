<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dm_Ms extends Model
{
    protected $guarded =[

    ];
    use HasFactory;

    function Enseignant (){
        return $this->belongsTo(Enseignant::class,'id_enseignant');
    }
    function Inscription (){
        return $this->belongsTo(Inscription::class,'id_etudiant');
    }
}
